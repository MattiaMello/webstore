<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class ProductsController extends AbstractController
{
    private $client;

    public function __construct()
    {
        $this->client = HttpClient::create(['headers' => [
            'key' => $_ENV['SD_KEY'],
            'exchange' => $_ENV['SD_EXCHANGE'],
        ]]);
    }

    private function fetchWebstoreInformations(): array
    {
        $response = $this->client->request(
            'GET',
            $_ENV['SD_PRODUCTS_URL'],
        );

        $statusCode = $response->getStatusCode();

        if ($statusCode != 200) {
            $content = $statusCode;
        } else {
            $content = $response->toArray();
        }

        $this->persistDataInLocalStorage($content);

        return $content;
    }

    private function createProduct($information)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $alreadyPersisted = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findOneBy([
                'uid' => $information['uid']
            ]);

        if (empty($alreadyPersisted)) {
            $product = new Product();
            $product->setUid($information['uid']);
            $product->setPrice($information['price']);
            $product->setFinalPrice($information['final_price']);
            $product->setCode($information['code']);
            $product->setStatus($information['status']);

            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($product);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
        }
    }

    private function updateProduct($information): bool
    {
        $entityManager = $this->getDoctrine()->getManager();

        $alreadyPersisted = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findOneBy(['uid' => $information['uid']]);

        if (!empty($alreadyPersisted)) {
            $alreadyPersisted->setUid($information['uid']);
            $alreadyPersisted->setPrice($information['price']);
            $alreadyPersisted->setFinalPrice($information['finalPrice']);
            $alreadyPersisted->setCode($information['code']);
            $alreadyPersisted->setStatus($information['status']);

            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($alreadyPersisted);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();

            return true;
        }
        return false;
    }

    private function deleteProduct($uid): bool
    {
        $entityManager = $this->getDoctrine()->getManager();

        $alreadyPersisted = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findOneBy([
                'uid' => $uid
            ]);

        if (!empty($alreadyPersisted)) {
            $entityManager->remove($alreadyPersisted);
            $entityManager->flush();
            return true;
        }
        return false;
    }

    private function persistDataInLocalStorage($content)
    {
        foreach ($content as $information) {
            $this->createProduct($information);
        }
    }

    private function retrieveDataFromLocalStorage($uid)
    {
        return $this->getDoctrine()
            ->getRepository(Product::class)
            ->findOneBy([
                'uid' => $uid
            ]);
    }

    private function retrieveAllDataFromLocalStorage()
    {
        if (!isset($_POST['searchquery']) || empty($_POST['searchquery'])) {
            return $this->getDoctrine()
                ->getRepository(Product::class)
                ->findAll();
        }

        $query = $_POST['searchquery'];

        return $this->getDoctrine()
            ->getRepository(Product::class)
            ->findByExampleField($query);
    }

    /**
     * @Route("/product/csv", name="exportProductsCSV")
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function csv()
    {
        $list = $this->retrieveAllDataFromLocalStorage();
        $dataArray = [];
        foreach ($list as $element) {
            array_push($dataArray, [
                'uid' => $element->getUid(),
                'price' => $element->getPrice(),
                'final_price' => $element->getFinalPrice(),
                'code' => $element->getCode(),
                'status' => $element->getStatus()
            ]);
        }

        $fp = fopen('php://output', 'w');
        foreach ($dataArray as $fields) {
            fputcsv($fp, $fields);
        }
        $response = new Response();
        $response->headers->set('Content-Type', 'text/csv');
        //it outputs a products.csv file
        $response->headers->set('Content-Disposition', 'attachment; filename="products.csv"');
        return $response;
    }

    /**
     * @Route("/product", name="viewProducts")
     */
    public function index(): Response
    {
        // database or API data sources
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $roles = $this->getUser()->getRoles();
        $notAssistant = true;
        if (in_array("assistant", $roles)) {
            $notAssistant = false;
        }
        $content = $this->retrieveAllDataFromLocalStorage();
        return $this->render('products/product.html.twig', ['data' => $content, 'notAssistant' => $notAssistant]);
    }

    /**
     * @Route("/product/edit/{uid}", name="editProduct")
     */
    public function edit(Request $request): Response
    {
        // database or API data sources

        $product = $this->retrieveDataFromLocalStorage($request->attributes->get('uid'));

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for uid ' . $request->attributes->get('uid')
            );
        }

        return $this->render('products/product.view.html.twig', ['data' => $product]);
    }

    /**
     * @Route("/product/fetch", name="fetchProducts")
     */
    public function fetch(Request $request): Response
    {
        // database or API data sources

        $this->fetchWebstoreInformations();

        return $this->redirect('/product');
    }

    /**
     * @Route("/product/edited/{uid}", name="productEdited")
     */
    public function edited(Request $request): Response
    {
        // database or API data sources

        $content = array_merge(['uid' => $request->attributes->get('uid')], $_POST);

        print_r($_POST);

        if (!$this->updateProduct($content)) {
            throw $this->createAccessDeniedException(
                'Could not update product for uid ' . $request->attributes->get('uid')
            );
        }

        return $this->redirect('/product');
    }

    /**
     * @Route("/product/delete/{uid}", name="deleteProduct")
     */
    public function delete(Request $request): Response
    {
        // database or API data sources

        if (!$this->deleteProduct($request->attributes->get('uid'))) {
            throw $this->createNotFoundException(
                'Could not delete product for uid ' . $request->attributes->get('uid')
            );
        }

        return $this->redirect('/product');
    }
}

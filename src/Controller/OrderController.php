<?php

namespace App\Controller;

use App\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class OrderController extends AbstractController
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
            $_ENV['SD_ORDERS_URL'],
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

    private function persistDataInLocalStorage($content)
    {
        foreach ($content as $information) {
            $this->createOrder($information);
        }
    }

    private function createOrder($information)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $alreadyPersisted = $this->getDoctrine()
            ->getRepository(Order::class)
            ->findOneBy([
                'orderID' => $information['orderID']
            ]);

        if (empty($alreadyPersisted)) {
            $order = new Order();
            $order->setOrderID($information['orderID']);
            $order->setTotal($information['total']);
            $order->setOrderDate($information['orderDate']);
            $order->setStatus($information['status']);
            $order->setLocale($information['locale']);

            // tell Doctrine you want to (eventually) save the Order (no queries yet)
            $entityManager->persist($order);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
        }
    }

    private function updateOrder($information): bool
    {
        $entityManager = $this->getDoctrine()->getManager();

        $alreadyPersisted = $this->getDoctrine()
            ->getRepository(Order::class)
            ->findOneBy(['orderID' => $information['orderID']]);

        if (!empty($alreadyPersisted)) {
            $alreadyPersisted->setOrderID($information['orderID']);
            $alreadyPersisted->setTotal($information['total']);
            $alreadyPersisted->setOrderDate($information['orderDate']);
            $alreadyPersisted->setStatus($information['status']);
            $alreadyPersisted->setLocale($information['locale']);

            // tell Doctrine you want to (eventually) save the Order (no queries yet)
            $entityManager->persist($alreadyPersisted);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();

            return true;
        }
        return false;
    }

    private function deleteOrder($orderID): bool
    {
        $entityManager = $this->getDoctrine()->getManager();

        $alreadyPersisted = $this->getDoctrine()
            ->getRepository(Order::class)
            ->findOneBy([
                'orderID' => $orderID
            ]);

        if (!empty($alreadyPersisted)) {
            $entityManager->remove($alreadyPersisted);
            $entityManager->flush();
            return true;
        }
        return false;
    }

    private function retrieveDataFromLocalStorage($orderID)
    {
        return $this->getDoctrine()
            ->getRepository(Order::class)
            ->findOneBy([
                'orderID' => $orderID
            ]);
    }

    private function retrieveAllDataFromLocalStorage()
    {
        if (!isset($_POST['searchquery']) || empty($_POST['searchquery'])) {
            return $this->getDoctrine()
                ->getRepository(Order::class)
                ->findAll();
        }

        $query = $_POST['searchquery'];

        return $this->getDoctrine()
            ->getRepository(Order::class)
            ->findByExampleField($query);
    }

    /**
     * @Route("/order/csv", name="exportOrdersCSV")
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function csv()
    {
        $list = $this->retrieveAllDataFromLocalStorage();
        $dataArray = [];
        foreach ($list as $element) {
            array_push($dataArray, [
                'orderID' => $element->getorderID(),
                'total' => $element->getTotal(),
                'orderDate' => $element->getOrderDate(),
                'status' => $element->getStatus(),
                'locale' => $element->getLocale()
            ]);
        }

        $fp = fopen('php://output', 'w');
        foreach ($dataArray as $fields) {
            fputcsv($fp, $fields);
        }
        $response = new Response();
        $response->headers->set('Content-Type', 'text/csv');
        //it outputs a orders.csv file
        $response->headers->set('Content-Disposition', 'attachment; filename="orders.csv"');
        return $response;
    }

    /**
     * @Route("/order", name="viewOrders")
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
        return $this->render('orders/order.html.twig', ['data' => $content, 'notAssistant' => $notAssistant]);
    }

    /**
     * @Route("/order/edit/{orderID}", name="editOrder")
     */
    public function edit(Request $request): Response
    {
        // database or API data sources

        $order = $this->retrieveDataFromLocalStorage($request->attributes->get('orderID'));

        if (!$order) {
            throw $this->createNotFoundException(
                'No order found for orderID ' . $request->attributes->get('orderID')
            );
        }

        return $this->render('orders/order.view.html.twig', ['data' => $order]);
    }

    /**
     * @Route("/order/fetch", name="fetchOrders")
     */
    public function fetch(Request $request): Response
    {
        // database or API data sources

        $this->fetchWebstoreInformations();

        return $this->redirect('/order');
    }

    /**
     * @Route("/order/edited/{orderID}", name="orderEdited")
     */
    public function edited(Request $request): Response
    {
        // database or API data sources

        $content = array_merge(['orderID' => $request->attributes->get('orderID')], $_POST);

        print_r($_POST);

        if (!$this->updateOrder($content)) {
            throw $this->createAccessDeniedException(
                'Could not update order for orderID ' . $request->attributes->get('orderID')
            );
        }

        return $this->redirect('/order');
    }

    /**
     * @Route("/order/delete/{orderID}", name="deleteOrder")
     */
    public function delete(Request $request): Response
    {
        // database or API data sources

        if (!$this->deleteOrder($request->attributes->get('orderID'))) {
            throw $this->createNotFoundException(
                'Could not delete order for orderID ' . $request->attributes->get('orderID')
            );
        }

        return $this->redirect('/order');
    }
}

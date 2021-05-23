<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('admin@mail.com');
        $user->setPassword($this->encoder->encodePassword($user, 'admin'));
        $user->setRoles(['admin']);
        $manager->persist($user);

        $user = new User();
        $user->setEmail('editor@mail.com');
        $user->setPassword($this->encoder->encodePassword($user, 'editor'));
        $user->setRoles(['editor']);
        $manager->persist($user);

        $user = new User();
        $user->setEmail('assistant@mail.com');
        $user->setPassword($this->encoder->encodePassword($user, 'assistant'));
        $user->setRoles(['assistant']);
        $manager->persist($user);

        $manager->flush();
    }
}

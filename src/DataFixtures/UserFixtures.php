<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setName('admin');
        $user->setEmail('admin@netflux.com');
        $user->setPassword('1234');
        $user->setBirthday('01/01/1990');
        $manager->persist($user);

        $manager->flush();
    }
}

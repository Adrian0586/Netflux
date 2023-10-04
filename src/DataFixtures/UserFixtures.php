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
        $user->setName('Admin');
        $user->setEmail('Admin');
        $user->setPassword('Admin');
        $user->setBirthday('Admin');
        $manager->persist($user);

        $manager->flush();
    }
}

<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CateogryFixtures extends Fixture
{
    public const CATEGORY_COMEDIE = 'CATEGORY_COMEDIE';

    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setName('Comédie');
        $manager->persist($category);
        $this->addReference(self::CATEGORY_COMEDIE, $category);


        $manager->flush();
    }
}

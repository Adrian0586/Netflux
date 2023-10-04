<?php

namespace App\DataFixtures;

use App\Entity\Video;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class VideoFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $video = new Video();
        $video->setTitle('Taxi 1');
        $video->setLink('https://www.youtube.com/watch?v=Cwd6xp7N_XE');
        $video->setAddedDate('04/10/2023');
        $video->setDescription("Daniel est un fou un chauffeur de taxi et sait échapper aux radars les plus perfectionnés. Il aide son ami Emilien, policier recalé pour la huitième fois à son permis de conduire. Tout les deux vont démanteler un gang de braqueurs de banques");
        $manager->persist($video);

        $manager->flush();
    }
}

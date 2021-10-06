<?php

namespace App\DataFixtures;

use App\Entity\News;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class NewsFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create("it_IT");

        for ($i = 0; $i < 20; $i++) {
            $news = new News();
            $news->setTitle($faker->sentence($nbWords = 6, $variableNbWords = true));
            $news->setContent($faker->text());
            $news->setDate($faker->dateTimeBetween('-1 month', 'now'));

            $manager->persist($news);
        }
        $manager->flush();
    }
}

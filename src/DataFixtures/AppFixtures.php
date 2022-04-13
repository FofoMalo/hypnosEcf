<?php

namespace App\DataFixtures;

use App\Entity\Hotel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Factory::create('fr_FR');
        
        
        for($i=0; $i<7; $i++) {
            $hotel = new Hotel();

            $hotel->setName($faker->name())
              ->setTown('Marseille',)
              ->setAdress('Marseille')
              ->setDescription('test description');

            $manager-> persist($hotel);
        }
        

        $manager->flush();
    }
}

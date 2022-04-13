<?php

namespace App\DataFixtures;

use App\Entity\Hotel;
use App\Entity\Room;
use App\Entity\Gerant;
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
              ->setTown($faker->city())
              ->setAdress($faker->address())
              ->setDescription('test description');

            $manager-> persist($hotel);
        }

        for($j=0; $j < 7; $j++){
            $gerant = new Gerant();

            $gerant->setName($faker->name())
                   ->setEmail($faker->email())
                   ->setRoles([''])
                   ->setPassword($faker->password());
 

            $manager->persist($gerant);
        }

        $manager->flush();
    }
}

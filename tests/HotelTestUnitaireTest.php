<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Hotel;
use App\Entity\Gerant;
class HotelTestUnitaireTest extends TestCase
{
    public function testIsTrue(): void
    {
        $hotel = new Hotel();
        $gerant = new Gerant();
        $hotel ->setName('belle')
               ->setTown('Rouen')
               ->setAdress('28 Rue gantery')
               ->setGerant($gerant);
        $this -> assertTrue($hotel->getName()==='belle');
        $this -> assertTrue($hotel ->getTown()==='Rouen');
        $this -> assertTrue($hotel ->getGerant()===$gerant );
    }
    public function testIsFalse()
    {
        $hotel = new Hotel();
        $gerant = new Gerant();

        $hotel->setName('belle')
              ->setTown('Rouen')
              ->setAdress('28 rue gantery')
              ->setGerant($gerant);
        $this -> assertFalse($hotel -> getName()==='false');
        $this -> assertFalse($hotel -> getTown()==='Lyon');
        $this -> assertFalse($hotel -> getGerant()=== new Gerant());
    }
    public function testIsEmpty()
    {
        $hotel = new Hotel();
        $gerant = new Gerant();
        
        $hotel->setName('belle')
              ->setTown('Rouen')
              ->setAdress(('28 rue gantery'))
              ->setGerant($gerant);
        
        $this -> assertEmpty($hotel -> getName()==='');
        $this -> assertEmpty($hotel -> getTown()==='');
        $this -> assertEmpty($hotel -> getAdress()==='');
        $this -> assertEmpty($hotel -> getGerant()==='');
    }

}

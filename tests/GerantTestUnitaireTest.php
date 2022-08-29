<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Gerant;


class GerantTestUnit extends TestCase
{
   public function testIsTrue(): void
    {
        $gerant = new Gerant();
        $gerant ->setName('Nom')
                    ->setEmail('for@test.com')
                    ->setPassword('password');

        $this->assertTrue($gerant->getName()==='Nom');
        $this->assertTrue($gerant->getEmail()==='for@test.com');
        $this->assertTrue($gerant->getPassword()==='password');

    }
    public function testIsFalse():void
    {
        $gerant = new Gerant();
        $gerant ->setName('gerant')
                ->setEmail('for@test.com')
                ->setPassword('mypassword');
        $this -> assertFalse($gerant->getName() ==='name');
        $this -> assertFalse($gerant->getEmail() ==='false@test.com');
        $this -> assertFalse($gerant-> getPassword()==='password');
    }
    public function testIsEmpty()
    {
        $gerant = new Gerant();
        $gerant ->setName('empty')
                ->setEmail('empty')
                ->setPassword('empty');
        $this -> assertEmpty($gerant -> getName()==='');
        $this -> assertEmpty($gerant -> getEmail()==='');
        $this -> assertEmpty($gerant -> getPassword()==='');
    }
}

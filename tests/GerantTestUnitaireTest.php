<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Gerant;
use App\Entity\Hotel;
use App\Entity\Room;

use function PHPUnit\Framework\assertContains;
use function PHPUnit\Framework\assertTrue;

class GerantTestUnit extends TestCase
{
    public function testIsTrue(): void
    {
        $gerant = new Gerant();
        $hotel = new Hotel();
        $room = new Room();
        $gerant ->setName('Nom')
                    ->setEmail('for@test.com')
 //                   ->setHotel($hotel)
//                    ->setRoom($room)
                    ->setPassword('password');
//                    ->setRole(['ADMIN_ROLE']);

        $this->assertTrue($gerant->getName()==='Nom');
        $this->assertTrue($gerant->getEmail()==='for@test.com');
        $this->assertTrue($gerant->getPassword()==='password');
//        $this->assertTrue( $gerant->getHotel($hotel));
//        $this->assertTrue($gerant->getRoom($room));
//        $this->assertTrue($gerant->getRoles()===['ADMIN_ROLE']);

    }
}

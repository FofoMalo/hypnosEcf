<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Room;
use App\Entity\Hotel;
use DateTime;

class RoomTestUnitaireTest extends TestCase
{
    public function testIsTrue(): void
    {
        $room = new Room();
        $hotel = new Hotel();
        $datetime = new DateTime();

        $room->setRoomName('La_suite')
             ->setRoomPrice(107)
             ->setCreatedAt($datetime)
             ->setHotelName($hotel);
        
        $this ->assertTrue($room -> getRoomName()==='La_suite');
        $this ->assertTrue($room -> getRoomPrice()=== '107');
        $this ->assertTrue($room -> getCreatedAt()===$datetime);
        $this ->assertTrue($room -> getHotelName()===$hotel);
    
    }
    public function testIsFalse()
    {
        $room = new Room();
        $hotel = new Hotel();
        $datetime = new DateTime();
        $room ->setRoomName('suite')
              ->setHotelName($hotel)
              ->setCreatedAt($datetime)
              ->setRoomPrice(107);
    
        $this -> assertFalse($room ->getRoomName()==='false');
        $this -> assertFalse($room ->getRoomPrice()==='100');
        $this -> assertFalse($room ->getHotelName()=== new Hotel());
        $this -> assertFalse($room ->getCreatedAt()=== new DateTime());
    }
    public function testIsEmpty()
    {
        $room = new Room();
        $this -> assertEmpty($room ->getRoomName()==='');
        $this -> assertEmpty($room ->getRoomPrice()==='');
        $this -> assertEmpty($room ->getHotelName()==='');
        $this -> assertEmpty($room ->getCreatedAt()==='');

    }
}

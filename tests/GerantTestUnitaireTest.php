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
        $gerant ->setName('Nom')
                    ->setEmail('for@test.com')
                    ->setPassword('password');

        $this->assertTrue($gerant->getName()==='Nom');
        $this->assertTrue($gerant->getEmail()==='for@test.com');
        $this->assertTrue($gerant->getPassword()==='password');

    }
}

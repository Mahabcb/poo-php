<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Homme;
use App\AbstractHuman;
use PHPUnit\Framework\TestCase;

class AbstractHumanTest extends TestCase 
{

    public function testGetName() :void
    {
        $human = $this->getMockForAbstractClass(AbstractHuman::class);
        $human->setName("John");

        $this->assertEquals("John", $human->getName());
    }

    public function testSetNameInstanceOfAbstractHuman() : void
    {   
        $human = $this->getMockForAbstractClass(AbstractHuman::class);
        $human->setName("Jane");

        $this->assertInstanceOf(AbstractHuman::class,$human->setName("Jane"));
    }

    public function testSetLastName() 
    {
        $human = $this->getMockForAbstractClass(AbstractHuman::class);
        $human->setLastName("Doe");

        $this->assertEquals("Doe", $human->getLastName());
    }    

    public function testGetGender() :void
    {
        $human = $this->getMockForAbstractClass(AbstractHuman::class);
        $male = new Homme();

        $this->assertEquals('homme', $male->getGender());
        
    }
}
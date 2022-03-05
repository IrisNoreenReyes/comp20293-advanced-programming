<?php
require_once __DIR__ . '/../src/Mazikeen.php';

class MazikeenTest extends \PHPUnit\Framework\TestCase
{

    public function testGetEmpName()
    {
        $mazikeen = new Mazikeen();
        $mazikeen->setEmpName("Resee");
        $this->assertEquals($mazikeen->getEmpName(), "Resee");
    }

    public function testGetEmpAge()
    {
        $mazikeen = new Mazikeen();
        $mazikeen->setEmpAge(21);
        $this->assertEquals($mazikeen->getEmpAge(), 21);
    }

    public function testEmpFaveColor()
    {
        $mazikeen = new Mazikeen();
        $mazikeen->setEmpFaveColor("NavyBlue");
        $this->assertEquals($mazikeen->getEmpFaveColor(), "NavyBlue");
    }

    public function testGetEmpNameCheckString()
    {
        $mazikeen = new Mazikeen();
        $mazikeen ->setEmpName("Resee");
        $this->assertIsString($mazikeen->getEmpName(), "Resee");
    }

    public function testGetEmpAgeCheckInt()
    {
        $mazikeen = new Mazikeen();
        $mazikeen->setEmpAge(21);
        $this->assertIsInt($mazikeen->getEmpAge(), 21);
    }

    public function testGetEmpAgeCheckNumeric()
    {
        $mazikeen = new Mazikeen();
        $mazikeen->setEmpAge(21);
        $this->assertIsNumeric($mazikeen->getEmpAge(), 21);
    }
    
    public function testEmpFaveColorCheckString()
    {
        $mazikeen = new Mazikeen();
        $mazikeen->setEmpFaveColor("NavyBlue");
        $this->assertIsString($mazikeen->getEmpFaveColor(), "NavyBlue");
    }

    public function testGetInput()
    {
        $mazikeen = new Mazikeen();
        $mazikeen->setInput("Resee", 20, "NavyBlue");
        $this->assertEquals($mazikeen->getInput(), "Resee", 20, "NavyBlue");
    }
}
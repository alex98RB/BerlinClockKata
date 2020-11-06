<?php

require "BerlinClock.php";
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $berlinClock;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->berlinClock = new BerlinClock();
    }

    public function test_convert_given00Minutes_shouldReturn00Light(){
        $actual = $this->berlinClock->minutes('00');

        $this->assertEquals("OOOO",$actual);
    }

    public function test_convert_given01Minutes_shouldReturn01Light(){
        $actual = $this->berlinClock->minutes('01');

        $this->assertEquals("OOOI", $actual);
    }

    public function test_convert_given02Minutes_shouldReturn02Light(){
        $actual = $this->berlinClock->minutes('02');

        $this->assertEquals("OOII", $actual);
    }

    public function test_convert_given03Minutes_shouldReturn03Light(){
        $actual = $this->berlinClock->minutes('03');

        $this->assertEquals("OIII", $actual);
    }

    public function test_convert_given04Minutes_shouldReturn04Light(){
        $actual = $this->berlinClock->minutes('04');

        $this->assertEquals("IIII", $actual);
    }

    public function test_convert_given05Minutes_shouldReturn01_SecondLineLight(){
        $actual = $this->berlinClock->minutes_per_05('05');

        $this->assertEquals('OOOOOOOOOOI',$actual);
    }

    public function test_convert_given10Minutes_shouldReturn02_SecondLineLight(){
        $actual = $this->berlinClock->minutes_per_05('10');

        $this->assertEquals('OOOOOOOOOII',$actual);
    }

    public function test_convert_given15Minutes_shouldReturn03_SecondLineLight(){
        $actual = $this->berlinClock->minutes_per_05('15');

        $this->assertEquals('OOOOOOOOIII',$actual);
    }

    public function test_convert_given20Minutes_shouldReturn04_SecondLineLight(){
        $actual = $this->berlinClock->minutes_per_05('20');

        $this->assertEquals('OOOOOOOIIII',$actual);
    }

    public function test_convert_given25Minutes_shouldReturn05_SecondLineLight(){
        $actual = $this->berlinClock->minutes_per_05('25');

        $this->assertEquals('OOOOOOIIIII',$actual);
    }

    public function test_convert_given30Minutes_shouldReturn06_SecondLineLight(){
        $actual = $this->berlinClock->minutes_per_05('30');

        $this->assertEquals('OOOOOIIIIII',$actual);
    }

    public function test_convert_given35Minutes_shouldReturn07_SecondLineLight(){
        $actual = $this->berlinClock->minutes_per_05('35');

        $this->assertEquals('OOOOIIIIIII',$actual);
    }

    public function test_convert_given40Minutes_shouldReturn08_SecondLineLight(){
        $actual = $this->berlinClock->minutes_per_05('40');

        $this->assertEquals('OOOIIIIIIII',$actual);
    }

}

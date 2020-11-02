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

}

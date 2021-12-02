<?php
use PHPUnit\Framework\TestCase;
require 'BerlinClock.php';
class BerlinClockTest extends TestCase
{
    public function testGetBerlinMinutes0ShouldReturn15x0()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinMinutes(0);

        // Assert
        $this->assertEquals("OOOOOOOOOOO\nOOOO", $actual);
    }

    public function testGetBerlinMinutes1ShouldReturn11x0And1xJAnd3xO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinMinutes(1);

        // Assert
        $this->assertEquals("OOOOOOOOOOO\nJOOO", $actual);
    }

    public function testGetBerlinMinutes2ShouldReturn11x0And2xJAnd2xO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinMinutes(2);

        // Assert
        $this->assertEquals("OOOOOOOOOOO\nJJOO", $actual);
    }

    public function testGetBerlinMinutes3ShouldReturn11x0And3xJAnd1xO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinMinutes(3);

        // Assert
        $this->assertEquals("OOOOOOOOOOO\nJJJO", $actual);
    }

    public function testGetBerlinMinutes4ShouldReturn11x0And4xJAnd0xO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinMinutes(4);

        // Assert
        $this->assertEquals("OOOOOOOOOOO\nJJJJ", $actual);
    }


    public function testGetBerlinMinutes16ShouldReturn2xJAnd1xRAnd8xOAnd1xJAnd3xO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinMinutes(16);

        // Assert
        $this->assertEquals("JJROOOOOOOO\nJOOO", $actual);
    }
    public function testGetBerlinMinutes33ShouldReturn2xJAnd1xRAnd2xJAnd1xRAnd5xOAnd3xJAnd1xO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinMinutes(33);

        // Assert
        $this->assertEquals("JJRJJROOOOO\nJJJO", $actual);
    }
    public function testGetBerlinMinutes50ShouldReturn2xJAnd1xRAnd2xJAnd1xRAnd2xJAnd1xRAnd1xJAnd1xOAnd4xO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinMinutes(50);

        // Assert
        $this->assertEquals("JJRJJRJJRJO\nOOOO", $actual);
    }




}

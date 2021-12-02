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



}

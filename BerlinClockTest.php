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
        $this->assertEquals("OOOOOOOOOOO OOOO", $actual);
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


}

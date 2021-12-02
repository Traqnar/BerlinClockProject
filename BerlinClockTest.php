<?php
use PHPUnit\Framework\TestCase;
require 'BerlinClock.php';
class BerlinClockTest extends TestCase
{
    //BELOW5MIN
    public function testGetBerlinMinutes0ShouldReturn15xO()
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

    //ABOVE5MIN

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

    //BELOW5HOURS
    public function testGetBerlinHours0ShouldReturn8xO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinHours(0);

        // Assert
        $this->assertEquals("OOOO\nOOOO", $actual);
    }
    public function testGetBerlinHours1ShouldReturn4xOAnd1xRAnd3xO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinHours(1);

        // Assert
        $this->assertEquals("OOOO\nROOO", $actual);
    }
    public function testGetBerlinHours2ShouldReturn4xOAnd2xRAnd2xO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinHours(2);

        // Assert
        $this->assertEquals("OOOO\nRROO", $actual);
    }
    public function testGetBerlinHours3ShouldReturn4xOAnd3xRAnd1xO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinHours(3);

        // Assert
        $this->assertEquals("OOOO\nRRRO", $actual);
    }
    public function testGetBerlinHours4ShouldReturn4xOAnd4xR()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinHours(4);

        // Assert
        $this->assertEquals("OOOO\nRRRR", $actual);
    }


    //ABOVE5HOURS
    public function testGetBerlinHours5ShouldReturn1xRAnd3xOAnd4xO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinHours(5);

        // Assert
        $this->assertEquals("ROOO\nOOOO", $actual);
    }
    public function testGetBerlinHours14ShouldReturn2xRAnd2xOAnd4xR()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinHours(14);

        // Assert
        $this->assertEquals("RROO\nRRRR", $actual);
    }
    public function testGetBerlinHours21ShouldReturn4xRAnd1xRAnd3xO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinHours(21);

        // Assert
        $this->assertEquals("RRRR\nROOO", $actual);
    }

    //SECONDS
    public function testGetBerlinSeconds0ShouldReturnO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinSeconds(0);

        // Assert
        $this->assertEquals("J", $actual);
    }
    public function testGetBerlinSeconds59ShouldReturnO()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinSeconds(59);

        // Assert
        $this->assertEquals("O", $actual);
    }
    //BERLINCLOCK
    public function testgetBerlinClock010550()
    {
        // Arrange
        $berlinClock = new BerlinClock();

        // Act
        $actual = $berlinClock->getBerlinClock("01:05:50");

        // Assert
        $this->assertEquals("J\nOOOO\nROOO\nJOOOOOOOOOO\nOOOO", $actual);
    }

}

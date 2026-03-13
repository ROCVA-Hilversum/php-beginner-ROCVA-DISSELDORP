<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Level3Test extends TestCase
{
    public function testSomVanArray(): void
    {
        requireOpdracht(3, 'SomVanArray.php');
        $this->assertSame(0, somVanArray([]));
        $this->assertSame(6, somVanArray([1, 2, 3]));
        $this->assertSame(-2, somVanArray([1, -5, 2]));
    }

    public function testFilterEven(): void
    {
        requireOpdracht(3, 'FilterEven.php');
        $this->assertSame([], filterEven([]));
        $this->assertSame([2, 4], filterEven([1, 2, 3, 4]));
        $this->assertSame([0, -2], filterEven([0, 1, -2, 3]));
    }

    public function testAantalKlinkers(): void
    {
        requireOpdracht(3, 'AantalKlinkers.php');
        $this->assertSame(0, aantalKlinkers(''));
        $this->assertSame(2, aantalKlinkers('Hallo'));
        $this->assertSame(5, aantalKlinkers('AEIOU'));
        $this->assertSame(1, aantalKlinkers('Rhythm')); // y
    }

    public function testTafel(): void
    {
        requireOpdracht(3, 'Tafel.php');
        $this->assertSame(
            ['3 x 1 = 3', '3 x 2 = 6', '3 x 3 = 9', '3 x 4 = 12', '3 x 5 = 15', '3 x 6 = 18', '3 x 7 = 21', '3 x 8 = 24', '3 x 9 = 27', '3 x 10 = 30'],
            tafel(3)
        );
        $this->assertSame('0 x 10 = 0', tafel(0)[9]);
    }

    public function testUniek(): void
    {
        requireOpdracht(3, 'Uniek.php');
        $this->assertSame([], uniek([]));
        $this->assertSame([1, 2, 3], uniek([1, 2, 2, 3, 1]));
        $this->assertSame(['1', 1], uniek(['1', 1, '1', 1])); // strict
    }
}


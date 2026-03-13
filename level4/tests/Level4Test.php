<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Level4Test extends TestCase
{
    public function testGemiddelde(): void
    {
        requireOpdracht(4, 'Gemiddelde.php');
        $this->assertSame(0.0, gemiddelde([]));
        $this->assertSame(2.0, gemiddelde([1, 2, 3]));
        $this->assertSame(2.5, gemiddelde([2, 3]));
    }

    public function testNormaliseerNaam(): void
    {
        requireOpdracht(4, 'NormaliseerNaam.php');
        $this->assertSame('Anna Van Der Berg', normaliseerNaam('  aNNa   vAn  dEr  bErG '));
        $this->assertSame('Jan', normaliseerNaam('jan'));
        $this->assertSame('', normaliseerNaam('   '));
    }

    public function testCsvVelden(): void
    {
        requireOpdracht(4, 'CsvVelden.php');
        $this->assertSame(['a', 'b', 'c'], csvVelden('a, b,  c'));
        $this->assertSame(['x'], csvVelden('x'));
        $this->assertSame(['', ''], csvVelden(','));
    }

    public function testStatistiek(): void
    {
        requireOpdracht(4, 'Statistiek.php');
        $this->assertSame(['min' => 0, 'max' => 0, 'avg' => 0.0], statistiek([]));
        $this->assertSame(['min' => 1, 'max' => 5, 'avg' => 3.0], statistiek([1, 3, 5]));
        $this->assertSame(['min' => -10, 'max' => 2, 'avg' => -4.0], statistiek([-10, -4, 2]));
    }

    public function testWachtwoordScore(): void
    {
        requireOpdracht(4, 'WachtwoordScore.php');
        $this->assertSame(0, wachtwoordScore(''));
        $this->assertSame(2, wachtwoordScore('abcdefgh')); // len>=8 + lower
        $this->assertSame(3, wachtwoordScore('Abcdefgh')); // len + lower + upper
        $this->assertSame(4, wachtwoordScore('Abcdefg1')); // + digit
        $this->assertSame(5, wachtwoordScore('Abcdefg1!')); // + symbol (and len>=8)
    }
}


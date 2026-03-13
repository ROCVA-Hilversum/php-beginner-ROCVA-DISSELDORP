<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Level5Test extends TestCase
{
    public function testInverteerMap(): void
    {
        requireOpdracht(5, 'InverteerMap.php');
        $this->assertSame([1 => 'a', 2 => 'b'], inverteerMap(['a' => 1, 'b' => 2]));
        $this->assertSame([1 => 'b'], inverteerMap(['a' => 1, 'b' => 1])); // last wins
    }

    public function testGroepeerOpEersteLetter(): void
    {
        requireOpdracht(5, 'GroepeerOpEersteLetter.php');
        $this->assertSame(
            ['a' => ['appel', 'Aap'], 'b' => ['boom']],
            groepeerOpEersteLetter(['appel', 'Aap', 'boom'])
        );
        $this->assertSame([], groepeerOpEersteLetter(['', '']));
    }

    public function testWoordFrequenties(): void
    {
        requireOpdracht(5, 'WoordFrequenties.php');
        $this->assertSame(['hi' => 3], woordFrequenties('Hi hi, HI!'));
        $this->assertSame(['a' => 2, 'bb' => 1], woordFrequenties('A a bb.'));
        $this->assertSame([], woordFrequenties('...,,,   '));
    }

    public function testVoegBoodschappenSamen(): void
    {
        requireOpdracht(5, 'VoegBoodschappenSamen.php');
        $this->assertSame(
            ['appel' => 3, 'melk' => 1, 'brood' => 2],
            voegBoodschappenSamen(['appel' => 2, 'melk' => 1], ['appel' => 1, 'brood' => 2])
        );
        $this->assertSame(['x' => 1], voegBoodschappenSamen([], ['x' => 1]));
    }

    public function testGebruikerSamenvatting(): void
    {
        requireOpdracht(5, 'GebruikerSamenvatting.php');
        $this->assertSame(
            'Sam (20) <sam@x.nl> - hobbies: gamen, lezen',
            gebruikerSamenvatting(['naam' => 'Sam', 'email' => 'sam@x.nl', 'leeftijd' => 20, 'hobbies' => ['gamen', 'lezen']])
        );
        $this->assertSame(
            'Kim (30) <kim@x.nl>',
            gebruikerSamenvatting(['naam' => 'Kim', 'email' => 'kim@x.nl', 'leeftijd' => 30])
        );
    }
}


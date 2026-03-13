<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * Level 2 – tests voor de opdrachten in `level2/opdrachten`.
 *
 * In dit level werken we met if/else, vergelijkingen en booleans,
 * maar nog steeds zonder eigen functies in de opdrachtbestanden.
 */
final class Level2Test extends TestCase
{
    /**
     * Opdracht 2.1 – Som of verschil
     *
     * Het script `opdrachten/opdracht-2.1.php` vraagt om een operator (`+` of `-`)
     * en daarna twee getallen. Bij `+` telt het de getallen op, bij `-` trekt het af.
     */
    public function testOpdracht2_1Optellen(): void
    {
        $randomInput = rand(100, 999);
        $cmd = "echo -e \"+\n$randomInput\n10\n\" | php " . escapeshellarg(getenv('SOURCE_DIR') . 'level2/opdrachten/opdracht-2.1.php');
        $output = shell_exec($cmd);
        $this->assertStringContainsString((string)($randomInput + 10), $output);
    }

    public function testOpdracht2_1Aftrekken(): void
    {
        $randomInput = rand(100, 999);
        $cmd = "echo -e \"-\n$randomInput\n9\n\" | php " . escapeshellarg(getenv('SOURCE_DIR') . 'level2/opdrachten/opdracht-2.1.php');
        $output = shell_exec($cmd);
        $this->assertStringContainsString((string)($randomInput - 9), $output);
    }

    /**
     * Opdracht 2.2 – Leeftijdscategorie
     *
     * Het script `opdrachten/opdracht-2.2.php` vraagt naar een leeftijd en
     * print afhankelijk van de waarde een categorie (bijv. "kind", "tiener", "volwassene").
     */
    public function testOpdracht2_2LeeftijdOnder12(): void
    {
        $output = shell_exec('echo -e "8\n" | php ' . escapeshellarg(getenv('SOURCE_DIR') . 'level2/opdrachten/opdracht-2.2.php'));
        $this->assertStringContainsStringIgnoringCase('kind', $output);
    }

    public function testOpdracht2_2LeeftijdTussen12En17(): void
    {
        $output = shell_exec('echo -e "15\n" | php ' . escapeshellarg(getenv('SOURCE_DIR') . 'level2/opdrachten/opdracht-2.2.php'));
        $this->assertStringContainsStringIgnoringCase('tiener', $output);
    }

    public function testOpdracht2_2Leeftijd18OfOuder(): void
    {
        $output = shell_exec('echo -e "25\n" | php ' . escapeshellarg(getenv('SOURCE_DIR') . 'level2/opdrachten/opdracht-2.2.php'));
        $this->assertStringContainsStringIgnoringCase('volwassene', $output);
    }

    /**
     * Opdracht 2.3 – Type inspectie
     *
     * Het script `opdrachten/opdracht-2.3.php` gebruikt `var_dump` op
     * ten minste één string en één integer.
     */
    public function testOpdracht2_3PrintStringEnIntegerTypes(): void
    {
        include_once(getenv('SOURCE_DIR') . 'level2/opdrachten/opdracht-2.3.php');
        $this->expectOutputRegex('/string\(/');
        $this->expectOutputRegex('/int\(/');
    }

    public function testOpdracht2_3GebruiktVarDump(): void
    {
        $output = shell_exec('php -w ' . getenv('SOURCE_DIR') . 'level2/opdrachten/opdracht-2.3.php');
        $this->assertStringContainsString('var_dump(', $output);
    }

    /**
     * Opdracht 2.4 – Entreeticket
     *
     * Het script `opdrachten/opdracht-2.4.php` vraagt naar de leeftijd
     * en bepaalt met if/else of iemand gratis, met korting of volledig betaalt.
     */
    public function testOpdracht2_4KindOnder12KrijgtGratis(): void
    {
        $output = shell_exec('echo -e "10\n" | php ' . getenv('SOURCE_DIR') . 'level2/opdrachten/opdracht-2.4.php');
        $this->assertStringContainsStringIgnoringCase('gratis', $output);
    }

    public function testOpdracht2_4TienerKrijgtKorting(): void
    {
        $output = shell_exec('echo -e "15\n" | php ' . getenv('SOURCE_DIR') . 'level2/opdrachten/opdracht-2.4.php');
        $this->assertStringContainsStringIgnoringCase('korting', $output);
    }

    public function testOpdracht2_4VolwasseneBetaaltVolledig(): void
    {
        $output = shell_exec('echo -e "30\n" | php ' . getenv('SOURCE_DIR') . 'level2/opdrachten/opdracht-2.4.php');
        $this->assertStringContainsStringIgnoringCase('volledig', $output);
    }
}
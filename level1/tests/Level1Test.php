<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * Level 1 – tests voor de opdrachten in `level1/opdrachten`.
 *
 * Let op: we werken hier nog zonder eigen functies, dus we testen
 * de losse script-bestanden direct via `php` op de command line.
 */
final class Level1Test extends TestCase
{
    /**
     * Opdracht 1 – Welkomstbericht
     *
     * Controle: `level1/opdrachten/opdracht1.php` print de tekst "PHP is leuk!".
     */
    public function testOpdracht1WelkomstberichtPrintJuisteTekst(): void
    {
        $output = shell_exec('php -w ' . getenv('SOURCE_DIR') . 'level1/opdrachten/opdracht-1.1.php');
        $this->assertStringContainsStringIgnoringCase('PHP is leuk!', $output);
    }

    /**
     * Opdracht 2 – Herhaal een boodschap
     *
     * Controle 1: de variabele `$boodschap` komt meerdere keren in de code voor.
     * (één keer declaratie + drie keer bij het printen = 4 keer totaal).
     */
    public function testOpdracht2VariabeleBoodschapWordtMeerdereKerenGebruikt(): void
    {
        $output = shell_exec('php -w ' . getenv('SOURCE_DIR') . 'level1/opdrachten/opdracht-1.2.php');
        $result = substr_count($output, '$boodschap');
        $this->assertEquals(4, $result);
    }

    /**
     * Opdracht 2 – Herhaal een boodschap
     *
     * Controle 2: de variabele `$boodschap` wordt gedeclareerd.
     */
    public function testOpdracht2GebruiktVariabeleMetNaamBoodschap(): void
    {
        $output = shell_exec('php -w ' . getenv('SOURCE_DIR') . 'level1/opdrachten/opdracht-1.2.php');
        $this->assertMatchesRegularExpression('/\$boodschap\s*=\s*(\'|")(.+)\1\s*;/', $output);
    }

    /**
     * Opdracht 3 – Favoriet eten
     *
     * Controle 1: het script print de input van de gebruiker terug.
     */
    public function testOpdracht3PrintGebruikersAntwoord(): void
    {
        $randomInput = 'eten' . rand(100, 999);
        $output = shell_exec("echo $randomInput | php " . getenv('SOURCE_DIR') . 'level1/opdrachten/opdracht-1.3.php');
        $this->assertStringContainsString($randomInput, $output);
    }

    /**
     * Opdracht 3 – Favoriet eten
     *
     * Controle 2: het script gebruikt `readline()`.
     */
    public function testOpdracht3GebruiktReadlineFunctie(): void
    {
        $regex = '/readline/';
        $output = shell_exec('php -w ' . getenv('SOURCE_DIR') . 'level1/opdrachten/opdracht-1.3.php');
        $this->assertMatchesRegularExpression($regex, $output);
    }

    /**
     * Opdracht 4 – Naam en leeftijd
     *
     * Controle 1: er wordt twee keer om input gevraagd en de zin
     * "<naam> is <leeftijd> jaar" wordt geprint.
     */
    public function testOpdracht4VraagtTweeKeerOmInputEnPrintZin(): void
    {
        $randomNaam = 'henk' . rand(100, 999);
        $randomLeeftijd = rand(10, 90);

        $command = "echo -e '$randomNaam\n$randomLeeftijd\n' | php " . getenv('SOURCE_DIR') . 'level1/opdrachten/opdracht-1.4.php';
        $output = shell_exec($command);

        $this->assertStringContainsString("$randomNaam is $randomLeeftijd jaar", $output);
    }

    /**
     * Opdracht 4 – Naam en leeftijd
     *
     * Controle 2: het script gebruikt string-concatenatie met de punt-operator.
     */
    public function testOpdracht4GebruiktStringConcatenatie(): void
    {
        $output = shell_exec('php -w ' . getenv('SOURCE_DIR') . 'level1/opdrachten/opdracht-1.4.php');

        // Minimaal één concatenatie met " is "
        $this->assertMatchesRegularExpression('/(\. \" is \" \.|\. \' is \' \.)/', $output);
    }
}
## Level 1 — eerste PHP‑scripts, variabelen en input

Je leert hier:
- **tekst printen** met `echo`
- **variabelen** gebruiken (`string`, `int`)
- de speciale constante **`PHP_EOL`** voor een nieuwe regel
- eenvoudige **string‑concatenatie** met de punt‑operator (`.`)
- **input vragen** met `readline()` (maar nog geen eigen functies schrijven)

### Opdrachten

Alle opdrachten in dit level zijn losse scripts (dus geen zelfgeschreven functies).

- **Opdracht 1 – Welkomstbericht** (`opdrachten/opdracht1.php`)
  - Print precies de tekst: `PHP is leuk!`
  - Gebruik één of meer `echo`‑statements.

- **Opdracht 2 – Herhaal een boodschap** (`opdrachten/opdracht2.php`)
  - Maak een variabele `$boodschap` met een korte tekst, bijvoorbeeld `"Ik leer PHP"`.
  - Print deze boodschap **drie keer onder elkaar**.
  - Gebruik `PHP_EOL` om een nieuwe regel te maken.

- **Opdracht 3 – Favoriet eten** (`opdrachten/opdracht3.php`)
  - Vraag met `readline()` naar het favoriete eten van de gebruiker.
  - Sla het antwoord op in een variabele, bijvoorbeeld `$eten`.
  - Print daarna een reactie, zoals: `"Lekker, pizza!"` (maar dan met de echte input).

- **Opdracht 4 – Naam en leeftijd** (`opdrachten/opdracht4.php`)
  - Vraag met `readline()` naar je **voornaam** en daarna naar je **leeftijd**.
  - Print een zin in de vorm: `"<naam> is <leeftijd> jaar."`
  - Gebruik de punt‑operator (`.`) om stukjes tekst en variabelen aan elkaar te plakken.

### Voorbeelden (ter inspiratie)

- **Echo met nieuwe regel**

```php
echo "PHP is leuk!" . PHP_EOL;
```

- **String‑concatenatie**

```php
$naam = "Sanne";
$leeftijd = 21;

echo $naam . " is " . $leeftijd . " jaar." . PHP_EOL;
```

- **Input met `readline()`**

```php
$eten = readline("Wat is je favoriete eten?" . PHP_EOL);
echo "Lekker, " . $eten . "!" . PHP_EOL;
```

### Hoe dit level testen

1. **Installeer afhankelijkheden (één keer per project)**  
   Voer in de root van het project uit:

   ```bash
   composer install
   ```

2. **Draai de tests voor Level 1**

   ```bash
   ./vendor/bin/phpunit --testsuite "Level 1"
   ```

3. **Fouten lezen**
   - Als een test faalt, lees dan goed de foutmelding.
   - In `level1/tests/Level1Test.php` kun je in de docblocks lezen **wat er precies getest wordt**.
   - Pas je script(s) aan tot alle tests **groen** zijn.


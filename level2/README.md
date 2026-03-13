## Level 2 — if/else, vergelijkingen, booleans

In dit level ga je beslissingen maken in je code met behulp van **if/else**.

Je leert:
- **voorwaarden schrijven** met `if`, `elseif`, `else`
- **vergelijkingen** gebruiken: `<`, `<=`, `>=`, `===`
- werken met **booleans** (`true` / `false`)
- eenvoudige logica bouwen op basis van **gebruikersinput**

We werken hier nog **zonder eigen functies**: alle code staat direct in de scripts in `level2/opdrachten`.

### Opdrachten

- **Opdracht 2.1 – Som of verschil** (`opdrachten/opdracht-2.1.php`)
  - Vraag met `readline()` welke operatie je wilt doen: `"+"` of `"-"`.
  - Vraag daarna twee getallen.
  - Als de operator `"+"` is, print je de **som**.
  - Als de operator `"-"` is, print je het **verschil**.

- **Opdracht 2.2 – Leeftijdscategorie** (`opdrachten/opdracht-2.2.php`)
  - Vraag met `readline()` naar een leeftijd.
  - Print:
    - `"kind"` als de leeftijd **kleiner dan 12** is.
    - `"tiener"` als de leeftijd **tussen 12 en 17 (inclusief)** is.
    - `"volwassene"` als de leeftijd **18 of ouder** is.

- **Opdracht 2.3 – Type inspectie** (`opdrachten/opdracht-2.3.php`)
  - Maak een string‑variabele, bijvoorbeeld `$tekst = "Hallo";`.
  - Maak een integer‑variabele, bijvoorbeeld `$getal = 42;`.
  - Gebruik `var_dump($tekst);` en `var_dump($getal);` om beide te tonen.
  - Je ziet dan in de output expliciet de types (`string(...)`, `int(...)`).

- **Opdracht 2.4 – Entreeticket** (`opdrachten/opdracht-2.4.php`)
  - Vraag met `readline()` naar de leeftijd van de bezoeker.
  - Print:
    - `"gratis"` als de leeftijd **kleiner dan 12** is.
    - `"korting"` als de leeftijd **tussen 12 en 17 (inclusief)** is.
    - `"volledig"` als de leeftijd **18 of ouder** is.

### Voorbeelden (anders dan de opdrachten)

- **Eenvoudige if/else**

```php
$temperatuur = 25;

if ($temperatuur > 20) {
    echo "Het is warm genoeg om buiten te zitten." . PHP_EOL;
} else {
    echo "Pak een trui, het is fris." . PHP_EOL;
}
```

- **Meerdere takken met elseif**

```php
$score = 73;

if ($score >= 90) {
    echo "Cijfer: A" . PHP_EOL;
} elseif ($score >= 75) {
    echo "Cijfer: B" . PHP_EOL;
} elseif ($score >= 60) {
    echo "Cijfer: C" . PHP_EOL;
} else {
    echo "Onvoldoende" . PHP_EOL;
}
```

- **Booleans en vergelijkingen**

```php
$leeftijd = 19;
$isVolwassen = $leeftijd >= 18;

if ($isVolwassen) {
    echo "Je bent volwassen." . PHP_EOL;
} else {
    echo "Je bent nog minderjarig." . PHP_EOL;
}
```

### Hoe dit level testen

1. **Zorg dat de dependencies geïnstalleerd zijn**  
   In de projectroot (één keer per project):

   ```bash
   composer install
   ```

2. **Draai de tests voor Level 2**

   ```bash
   ./vendor/bin/phpunit --testsuite "Level 2"
   ```

3. **Lees de foutmeldingen goed**
   - Als een test faalt, zie je welke testmethode faalt.
   - In `level2/tests/Level2Test.php` staan boven de testen korte Nederlandstalige beschrijvingen van wat er precies verwacht wordt.
   - Pas je code in `level2/opdrachten` aan tot alle tests **groen** zijn.


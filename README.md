# PHP Beginner — opdrachten met automatische tests

Deze repo is een **PHP-beginner cursus** in 5 levels. Elke opdracht heeft **automatische PHPUnit tests**.

## Installeren & testen

- Dependencies installeren:

```bash
composer install
```

- Alle tests draaien:

```bash
./vendor/bin/phpunit
```

- Alleen 1 level draaien (voorbeeld Level 3):

```bash
./vendor/bin/phpunit --testsuite "Level 3"
```

## Structuur

- `level1/` t/m `level5/`: opdrachten per level
  - `src/`: startercode (hier werk je als student)
  - `tests/`: PHPUnit tests
- `tests/bootstrap.php`: helper om opdrachtbestanden te laden

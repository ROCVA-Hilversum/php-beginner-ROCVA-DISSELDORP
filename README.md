[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/B7S8DoFh)
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

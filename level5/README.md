## Level 5 — associative arrays en tekstverwerking

Nieuw in dit level:
- associative arrays (`['key' => 'value']`)
- `foreach` over key/value
- simpele data-transformaties (groeperen, tellen)

### Opdrachten
- `InverteerMap.php` → `inverteerMap(array $map): array`
- `GroepeerOpEersteLetter.php` → `groepeerOpEersteLetter(array $woorden): array`
- `WoordFrequenties.php` → `woordFrequenties(string $tekst): array`
- `VoegBoodschappenSamen.php` → `voegBoodschappenSamen(array $lijstA, array $lijstB): array`
- `GebruikerSamenvatting.php` → `gebruikerSamenvatting(array $user): string`

### Testen

```bash
./vendor/bin/phpunit --testsuite "Level 5"
```


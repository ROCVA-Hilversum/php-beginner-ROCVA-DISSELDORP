<?php declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Load exactly one opdracht file.
 *
 * We keep opdracht code in the global namespace for beginners.
 * Each file should define exactly one function with the same name
 * as the filename (e.g. `groet()` in `Groet.php`).
 */
function requireOpdracht(int $level, string $fileName): void
{
    $path = __DIR__ . '/../level' . $level . '/src/' . $fileName;
    if (!is_file($path)) {
        throw new RuntimeException("Opdracht file not found: {$path}");
    }

    require_once $path;
}


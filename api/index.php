<?php

try {
    // Pastikan folder /tmp/cache dibuat terlebih dahulu untuk tempat menulis bootstrap cache Vercel
    if (env('VERCEL') || isset($_SERVER['VERCEL'])) {
        if (!is_dir('/tmp/cache')) {
            mkdir('/tmp/cache', 0755, true);
        }
    }

    // Meneruskan request Vercel ke index.php bawaan Laravel
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    header("HTTP/1.1 500 Internal Server Error");
    echo "<h1>Fatal Bootstrap Error</h1>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " on line " . $e->getLine() . "</p>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
}
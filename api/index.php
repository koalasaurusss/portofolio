<?php

// 1. Definisikan jalur folder sementara yang diizinkan Vercel
$compiledPath = '/tmp/storage/framework/views';

// 2. Buat foldernya secara otomatis jika belum ada di server Vercel
if (!is_dir($compiledPath)) {
    mkdir($compiledPath, 0777, true);
}

// 3. Paksa Laravel menggunakan folder /tmp tersebut
putenv("VIEW_COMPILED_PATH={$compiledPath}");
$_ENV['VIEW_COMPILED_PATH'] = $compiledPath;
$_SERVER['VIEW_COMPILED_PATH'] = $compiledPath;

// 4. Paksa session dan cache agar tidak menulis ke file (mencegah error read-only lainnya)
putenv("SESSION_DRIVER=cookie");
putenv("CACHE_STORE=array");
putenv("LOG_CHANNEL=stderr");

// 5. Panggil core Laravel
require __DIR__ . '/../public/index.php';
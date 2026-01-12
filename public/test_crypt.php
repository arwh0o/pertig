<?php

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// We just want to inspect config after boot
echo "<h1>Encryption Debugger</h1>";
echo "<pre>";

$key = config('app.key');
$cipher = config('app.cipher');

echo "Current Key: " . htmlspecialchars($key) . "\n";
echo "Current Cipher: " . htmlspecialchars($cipher) . "\n";
echo "Key Length (bytes): " . strlen(base64_decode(str_replace('base64:', '', $key))) . "\n";

try {
    $encrypted = crypt('test', 'rl'); // Basic PHP check
    echo "PHP crypt() works.\n";
    
    $encrypter = new \Illuminate\Encryption\Encrypter(
        $app['config']['app.key'],
        $app['config']['app.cipher']
    );
    echo "Laravel Encrypter Instantiated Successfully!\n";
    echo "Test Encrypt: " . $encrypter->encrypt('Hello World') . "\n";
} catch (\Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}

echo "</pre>";

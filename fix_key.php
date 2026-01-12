<?php
// Generate a confirmed 32-byte key
$key = 'base64:' . base64_encode(random_bytes(32));

$path = __DIR__ . '/config/app.php';
$content = file_get_contents($path);

// Replace the key line with the hardcoded valid key
$newContent = preg_replace(
    "/'key' => .*,/", 
    "'key' => '$key',", 
    $content
);

file_put_contents($path, $newContent);

echo "SUCCESS: Key has been updated in config/app.php\n";
echo "New Key: $key\n";
echo "Length: " . strlen(base64_decode(substr($key, 7))) . " bytes (Should be 32)\n";

<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// Fix the password
$user = User::where('email', 'admin@pertig.com')->first();

if ($user) {
    // Manually update using query builder to bypass any model events/casts potential issues first, 
    // or just use Eloquent. Let's use Eloquent but force a fresh hash.
    $user->password = Hash::make('password123'); 
    $user->save();
    
    echo "<h1>SUCCESS: Admin Password Reset!</h1>";
    echo "<p>User: admin@pertig.com</p>";
    echo "<p>New Password: password123</p>";
    echo "<p>New Hash: " . $user->password . "</p>";
    echo "<br><a href='/login'>Go to Login</a>";
} else {
    echo "<h1>ERROR: Admin user not found in database.</h1>";
    echo "Please check your database table 'users'.";
}

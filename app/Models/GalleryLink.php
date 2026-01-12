<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryLink extends Model
{
    use HasFactory;

    protected $fillable = ['photo_date', 'drive_url'];

    protected $casts = [
        'photo_date' => 'date',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCarRegistration extends Model
{
     protected $table = 'car registration';
     protected $fillable = [
        // Other fields...
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'image6',
        'image7',
        'image8',
        'image9',
        // ... Add other image fields here
    ];
    use HasFactory;
}

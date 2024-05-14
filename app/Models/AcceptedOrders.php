<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedOrders extends Model
{
    protected $table = "acceptedorders";
    use HasFactory;

    // Add the 'firstname' column to the $fillable property
    protected $fillable = [
        'shopid',
        'booking_id',
        'firstname',
        'lastname',
        'contact',
        'address',
        'cartype',
        'model',
        'carissues',
        'longitude',
        'latitude',
        // Add other columns as needed
    ];
}

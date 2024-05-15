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
        'RegistrrationNumber',
        'CarName',
        'CarPrice',
        'cardesc',
        'PartExchange',
        'CarMilage',
        'CarMilage',
        'CarDoor',
        'GearBox',
        'EnginType',
        'CarColor',
        'EngiPosition',
        'Aspiration',
        'EngineSize',
        'CylinderLayout',
        'FuelConsumption',
        'Health',
        'Cylinder',
        'Owners',
        'TopSpeed',
        'DrivenWheels',
        'Fname',
        'Lname',
        'Address1',
        'Address2',
        'City',
        'County',
        'Postcode',
        'TelephoneNumber',
    ];
    use HasFactory;
}

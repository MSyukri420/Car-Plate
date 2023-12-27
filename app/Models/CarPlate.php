<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPlate extends Model
{
    use HasFactory;

    protected $table = 'carplates'; // Name of the table in the database

    protected $fillable = [
        'category',
        'alphabet_start',
        'alphabet_end',
        'number',
        'carplate',
        'price',
    ];

    // Automatically handle created_at and updated_at timestamps
    public $timestamps = true;

    // Add any relationships, custom methods, or other model functionality here
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivePlate extends Model
{
    use HasFactory;

    protected $table = 'live_plate';

    protected $fillable = [
        'state',
        'plate',
        'end_date',
    ];

    public $timestamps = true;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'cate_id',
        'origin',
        'destination',
        'round_trip',
        'description',
        'available_seat',
        'available_seat',
        'pickup_location',
        'price',
        'status',
        'image',
    ];
}

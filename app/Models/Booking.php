<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable =[
        'hotel_id',
        'arrival_date',
        'departure_date',
        'tamu',
        'nama'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model

{
     protected $fillable = [
    'guest_name',
     'guest_email', 
     'guest_phone', 
     'room_id', 'check_in',
      'check_out',
       'user_id'
];


    use HasFactory;

 public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }
}
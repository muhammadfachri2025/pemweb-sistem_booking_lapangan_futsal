<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    public function bookings(){
        return $this->hasMany(Booking::class,'id_fields','id_fields');
    }
}

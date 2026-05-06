<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // 🔥 INI PENTING (karena tabel kamu bukan "bookings")
    protected $table = 'booking';

    // 🔥 primary key custom
    protected $primaryKey = 'id_booking';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id_booking',
        'id_user',
        'id_fields',
        'id_payment',
        'tanggal',
        'waktu_mulai',
        'waktu_berakhir',
        'total_harga',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class,'id_user','id_user');
    }

    public function field(){
        return $this->belongsTo(Field::class,'id_fields','id_fields');
    }

    public function payment(){
        return $this->hasOne(Payment::class,'id_booking','id_booking');
    }
}

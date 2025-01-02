<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
   

protected $table='bookings';

    protected $fillable = [
        'tripId',
        'userId',
        'numberOfPassenger',
        'passengerName',
        'passengerEmail',
        'passengerPhoneNumber',
        'paymentStatus',
        'status'
       
        
];



public function trip(){
    return $this->hasOne('App\Models\Trip','id','tripId');

}


}

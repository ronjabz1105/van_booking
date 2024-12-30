<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Trip extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'trips';


    use HasFactory;

   
    protected $fillable = [
        'vanId',
        'driverId',
        'departureTime',
        'arrivalTime',
        'destination',
        'placeOfOrigin',  
        'price',  
];

public function driver(){
    return $this->hasOne('App\Models\Driver','id','driverId');

}
public function van(){
    return $this->hasOne('App\Models\Van','id','vanId');

}



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Driver extends Model
{
   
    use HasFactory;
    public $timestamps = false;

protected $table='drivers';

    protected $fillable = [
        'name',
        'phone',
        'address',
        'license',
        'gender',
        
];

public function trip(){
    return $this->hasMany(Trip::class, 'trip_id');
}
}

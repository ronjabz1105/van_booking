<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Van extends Model
{
    use HasFactory;

    public $timestamps = false;

protected $table='vans';

    protected $fillable = [
        'type',
        'model',
        'color',
        'capacity',
        'plateNumber',
        
];
public function trip(){
    return $this->hasMany(Trip::class, 'trip_id');
}

}

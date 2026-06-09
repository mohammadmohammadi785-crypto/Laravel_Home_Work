<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    /** @use HasFactory<\Database\Factories\OwnerFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'car_id'
    ];
    public function car(){
        return $this->belongsTo(Car::class);
    }
    public function customer(){
        return $this->hasOneThrough(Owner::class, Car::class, "mechanic_id", "car_id", "id", "id");
    }
}

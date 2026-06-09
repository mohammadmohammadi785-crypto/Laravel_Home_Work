<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /** @use HasFactory<\Database\Factories\CarFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'mechanic_id',
    ];
    public function mechanic(){
        return $this->belongsTo(Mechanic::class);
    }
    public function owner(){
        return $this->hasOne(Owner::class);
    }
}

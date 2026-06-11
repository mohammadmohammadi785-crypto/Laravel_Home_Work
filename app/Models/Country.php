<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /** @use HasFactory<\Database\Factories\CountryFactory> */
    use HasFactory;
    public function posts(){
        return $this->hasManyThrough(Post::class, Client::class, "country_id", "client_id", "id", "id");
    }
}

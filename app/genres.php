<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\movies;

class genres extends Model
{
    protected $table = 'utswebprog.genres';
    public function movies(){
        return $this->hasMany(movies::class, 'genre_id', 'id');
    }
}

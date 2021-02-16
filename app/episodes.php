<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\movies;

class episodes extends Model
{
    protected $table = 'utswebprog.episodes';
    public function movies(){
        return $this->belongsTo(movies::class, 'id', 'movie_id');
    }
}

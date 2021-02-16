<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\genres;
use App\episodes;

class movies extends Model
{
    protected $table = 'utswebprog.movies';
    public function genres(){
        return $this->belongsTo(genres::class,'id','genre_id');
    }

    public function episodes(){
        return $this->hasMany(episodes::class, 'movie_id', 'id');
    }
}

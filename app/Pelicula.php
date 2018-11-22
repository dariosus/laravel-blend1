<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    public $table = "movies";
    //public $primaryKey = "id";
    //public $timestamps = false;
    public $guarded = [];

    public function genero() {
        return $this->belongsTo("App\Genero", "genre_id");
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    public function Categorie()
    {
        return $this->belongsTo('App\Categorie');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    public function Produit()
    {
        return $this->belongsTo('App\Produit');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function SousCategorie()
    {
        return $this->belongsTo('App\SousCategorie');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }

}

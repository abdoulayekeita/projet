<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Produit()
    {
        return $this->belongsTo('App\Produit');
    }

    public function Etatcmd()
    {
        return $this->belongsTo('App\Etatcmd');
    }
}

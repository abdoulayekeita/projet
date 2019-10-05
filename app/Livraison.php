<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    public function Modelivraison()
    {
        return $this->belongsTo('App\Modelivraison');
    }
}

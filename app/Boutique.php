<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boutique extends Model
{
    protected $fillable = [
        'nom_boutique', 'pays', 'ville','quartier','rue',
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}

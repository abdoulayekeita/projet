<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoutiqueImage extends Model
{
    protected $fillable = ['boutique_id', 'filename'];

    public function boutique()
    {
        return $this->belongsTo('App\Boutique');
    }
}

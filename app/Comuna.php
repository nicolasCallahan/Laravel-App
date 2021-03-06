<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    public function region()
    {
    	return $this->belongsTo(Region::class);
    }

    public function catastrofes()
    {
    	return $this->belongsToMany(Catastrofe::class);
    }
}

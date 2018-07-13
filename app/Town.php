<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    //
    public function district()
    {
    	return $this->belongsTo(District::class);
    }

    public function residences()
    {
    	return $this->hasMany(Residence::class);
    }

    public function placeOfBirths()
    {
    	return $this->hasMany(PlaceOfBirth::class);
    }
}

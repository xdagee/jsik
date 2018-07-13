<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    //
    public function town()
    {
    	return $this->belongsTo(Town::class);
    }

    public function employees()
    {
    	return $this->hasMany(Employee::class);
    }
}

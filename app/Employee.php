<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    public function residence()
    {
    	return $this->belongsTo(Residence::class);
    }

    public function placeOfBirth()
    {
    	return $this->belongsTo(PlaceOfBirth::class);
    }

    public function educationLevel()
    {
    	return $this->belongsTo(EducationLevel::class);
    }

    public function specialities()
	{
		return $this->belongsToMany(Speciality::class, 'employee_specialities')->withTimestamps();
	}
}

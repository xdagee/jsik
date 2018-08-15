<?php

namespace App;

use Carbon\Carbon;

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

    public function ethnicity()
    {
        return $this->belongsTo(Ethnicity::class);
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }

    public function specialities()
	{
		return $this->belongsToMany(Speciality::class, 'employee_specialities')->withPivot('years_of_experience')->withTimestamps();
	}

    /**
     * Accessor for Age.
    */
    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['dob'])->age;
    }
}

<?php

namespace App;

class Speciality extends Model
{
    //
    public function employees()
	{
		return $this->belongsToMany(LeaveType::class, 'employee_specialities')->withPivot('years_of_experience')->withTimestamps();
	}

	// employee speciality
	public function getSpecialities($id)
	{
			return DB::table('specialities')->
			join('employee_specialities','specialities.id','=','employee_specialities.speciality_id')->
			where('employee_specialities.employee_id',$id)->
			select('name as name')->
			get();
	}
}

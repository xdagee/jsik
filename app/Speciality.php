<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    //
    public function employees()
	{
		return $this->belongsToMany(LeaveType::class, 'employee_specialities')->withTimestamps();
	}
}

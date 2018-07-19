<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Employee;
use App\EmployeeSpeciality;
use App\EducationLevel;
use App\PlaceOfBirth;
use App\Residence;
use App\Speciality;

class EmployeesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employee::get();
        // json
        // return $employees;
        // view
        return view ('employees.index', compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    //     return view('employees.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(request(), [
            'firstname'=>'required',
            'lastname' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'years_of_experience' => 'required',
            'work_place' => 'required',
            'residence_id' => 'required',
            'place_of_birth_id' => 'required',
            'education_level_id' => 'required'

        ]);


        //Carbon::parse($request['dob'])->toDateString(),
        $employee = Employee::create([
            'firstname' => request('firstname'), // typed
            'lastname' => request('lastname'), // typed
            'othername' => request('othername'), // typed optional
            'dob' => Carbon::parse(request('dob'))->toDateString(), // picked date ('yyy-mm-dd')
            'gender' => request('gender'), // choosen radio button
            'years_of_experience' => request('years_of_experience'), // typed
            'work_place' => request('work_place'), //typed
            'residence_id' => request('residence_id'), // selection from db
            'place_of_birth_id' => request('place_of_birth_id'), // selection from db
            'education_level_id' => request('education_level_id') // selection from db
        ]);

        //
        return redirect()->route('employees.index')
        ->with('flash_message', 'Employee,'.$employee->lastname.' added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee = Employee::findOrFail($id);
        // json
        return $employee;
        // view
        // return view('employees.show', compact('employee'));
    }

}

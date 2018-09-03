<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\EducationLevel;
use App\Employee;
use App\Ethnicity;
use App\PlaceOfBirth;
use App\Residence;
use App\Religion;
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
        $employees = Employee::latest()->get();
        $placeofbirths = PlaceOfBirth::all();
        $ethnicities = Ethnicity::all();
        $religions = Religion::all();
        $residences = Residence::all();
        $educationallevels = EducationLevel::all();
        $specialities = Speciality::all();
        // json
        // return $employees;
        // view
        return view ('employees.index', compact('employees','placeofbirths','ethnicities','religions','residences','educationallevels','specialities'));

    }

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
            'years_at_workplace' => 'required',
            'work_place' => 'required',
            'years_at_residence' => 'required',
            'residence_id' => 'required',
            'place_of_birth_id' => 'required',
            'education_level_id' => 'required',
            'religion_id' => 'required',
            'ethnicity_id' => 'required'
            // 'area_of_speciality_id' => 'required'
        ]);

        DB::beginTransaction();
        try {
            $employee = Employee::create([
                'firstname' => request('firstname'), // typed
                'lastname' => request('lastname'), // typed
                'othername' => request('othername'), // typed optional
                'dob' => Carbon::parse(request('dob'))->toDateString(), // picked date ('yyy-mm-dd')
                'gender' => request('gender'), // choosen radio button
                'years_at_workplace' => request('years_at_workplace'), // typed
                'work_place' => request('work_place'), // selection from db
                'years_at_residence' => request('years_at_residence'), // selected fron db
                'residence_id' => request('residence_id'), // selected from db
                'place_of_birth_id' => request('place_of_birth_id'), // selected from db
                'education_level_id' => request('education_level_id'), // typed
                'religion_id' => request('religion_id'),
                'ethnicity_id' => request('ethnicity_id')
                // 'area_of_speciality_id' => request('area_of_speciality_id'), // selected from db
            ]);

            $employee->specialities()->attach(request('area_of_speciality_id'));
            DB::commit();   
        } catch (Exception $e) {
            DB::rollBack();
        }

        // flash message after a successful insertion
        flash('Employee, '.$employee->firstname.' was added successfully!')->success();
        return redirect()->route('employees.index');
    }

}

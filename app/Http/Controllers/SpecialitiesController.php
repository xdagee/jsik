<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Speciality;

class SpecialitiesController extends Controller
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
            $skills = Speciality::latest()->get();
            // json
            // return $skills;
            // view
            return view ('skills.index', compact('skills'));
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
                'name'=>'required'
            ]);

            //
            $skill = Speciality::create([
                'name' => request('name')
            ]);

            // flash message after a successful insertion
            flash('Skill, '.$skill->name.' was added successfully!')->success();
            return redirect()->route('skills.index');
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
            $skill = Speciality::findOrFail($id);
            // json
            return $skill;
            // view
            // return view ('skills.show', compact('skill'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
            $skill = Speciality::findOrFail($id);
            //
            return view('skills.edit', compact('skill'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            // validation
            $this->validate($request, [
                'name' => 'required'
            ]);

            $skill = Speciality::findOrFail($id);
            $skill -> name = $request -> input('name');
            $skill -> save();

            // return redirect()->route('skills.show', $skill->id)->with('flash_message','Skill, '. $skill->name.' updated successfully');
            // flash message after a successfully
            
            return redirect()->route('skills.show', $skill->id)->flash('Skill, '.$skill->name.' was updated successfully!')->success();

                
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
            $skill = Speciality::findOrFail($id);
            $skill -> delete();

            return redirect()->route('skills.index')->flash('skill deleted successfully!')->success();
        }
}

@extends('layouts.master')

@section('content')

	<section id="content">
		<div class="container">
			<div class="card">
				<div class="card-header pull-right">
					@include('flash::message')
				</div>
			</div>
		</div>
		<div class="container">
			<div class="card">
				<div class="card-header pull-right">
					<a data-toggle="modal" href="#addEmployee" class="btn btn-primary">Add Employee</a>
				</div>

				<div class="modal fade" id="addEmployee" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
				    <div class="modal-dialog">
				        <div class="modal-content">
				            <div class="modal-header">
				                <h4 class="modal-title">Add New Employee</h4>
				            </div>

				            <form role="form" method="POST" action="{{ url('employees') }}">
				            	{{ csrf_field() }}

					            <div class="modal-body">
					            	
					            	        <div class="input-group">
					            	            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
					            	            <div class="col-sm-4">
					            	                <div class="fg-line">    
					            	                    <input type="text" class="form-control" name="firstname" placeholder="First name" required>
					            	                </div>
					            	            </div>
					            	            <div class="col-sm-4">
					            	                <div class="fg-line">    
					            	                    <input type="text" class="form-control" name="lastname" placeholder="Last name" required>
					            	                </div>
					            	            </div>
					            	            <div class="col-sm-4">
					            	                <div class="fg-line">    
					            	                    <input type="text" class="form-control" name="othername" placeholder="Other names">
					            	                </div>
					            	            </div>
					            	        </div>

					            	        <br>

					            	        <!-- radio -->
					            	        <div class="input-group">
					            	        	<span class="input-group-addon"><i class="zmdi zmdi-face"></i></span>
					            	        	<div class="col-sm-4">
					            	                <div class="fg-line">
					            	                    <label>
					            	                        <i class="input-helper"></i>  
					            	                        Gender
					            	                    </label>
					            	                </div>
					            	            </div>
					            	        	<div class="col-sm-4">
					            	                <div class="fg-line">
					            	                    <label class="radio radio-inline m-r-20">
					            	                        <input type="radio" name="gender" value="0">
					            	                        <i class="input-helper"></i>  
					            	                        Female
					            	                    </label>
					            	                </div>
					            	            </div>
					            	            <div class="col-sm-4">
					            	                <div class="fg-line">
					            	                    <label class="radio radio-inline m-r-20">
					            	                        <input type="radio" name="gender" value="1">
					            	                        <i class="input-helper"></i>  
					            	                        Male
					            	                    </label>
					            	                </div>
					            	            </div>
					            	        </div>

					            	        <br>

					            	        <!-- date picker -->
					            	        <div class="input-group">
					            	        	<span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
					            	        	<div class="col-sm-6">
					            	                <div class="fg-line">    
					            	                    <input type="text" class="form-control date-picker" id="dob" name="dob" placeholder="Date of Birth">
					            	                </div>
					            	            </div>
					            	        
					            	        	{{-- <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span> --}}
					            	            <!-- dropdow selection from db-->
					            	            <div class="col-sm-6">
					            	                <div class="fg-line">
					            	                    <select class="selectpicker" name="place_of_birth_id" required>
					            	                    	<option value="" selected> Place of Birth </option>
					            	                        <option value="301">Accra</option>
					            	                        <option value="302">Bolgatanga</option>
					            	                        <option value="303">Cape Coast</option>
					            	                        <option value="304">Ho</option>
					            	                        <option value="305">Koforidua</option>
					            	                        <option value="306">Kumasi</option>
					            	                        <option value="307">Sekondi-Takoradi</option>
					            	                        <option value="308">Sunyani</option>
					            	                        <option value="309">Tamale</option>
					            	                        <option value="310">Wa</option>
					            	                    </select>
					            	                </div>
					            	            </div>
					            	        </div>

					            	        <br>

					            	        <!-- number -->
					            	        <div class="input-group">
					            	        	<span class="input-group-addon"><i class="zmdi zmdi-star"></i></span>
					            	        	<div class="col-sm-6">
					            	                <div class="fg-line">    
					            	                    <input type="number" class="form-control" name="years_of_experience" placeholder="Years of Experience">
					            	                </div>
					            	            </div>
					            	        </div>

					            	        <br>

					            	        <!-- dropdown from db -->
					            	        <div class="input-group">
					            	            <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
					            	            <div class="col-sm-6">
					            	                <div class="fg-line">
					            	                    <select class="selectpicker" name="residence_id" required>
					            	                    	<option value="" selected> Residence </option>
					            	                        <option value="200">Adabraka</option>
					            	                        <option value="201">Carprise</option>
					            	                        <option value="202">Alajo</option>
					            	                        <option value="203">Kotobabi</option>
					            	                    </select>
					            	                </div>
					            	            </div>
					            	        </div>

					            	        <br>

					            	        <!-- dropdown from db -->
					            	        <div class="input-group">
					            	        	<span class="input-group-addon"><i class="zmdi zmdi-trending-up"></i></span>
					            	        	<div class="col-sm-6">
					            	                <div class="fg-line">    
					            	                    <select class="selectpicker" name="education_level_id" required>
					            	                    	<option value="" selected>Educational Level</option>
					            	                        <option value="5">Diploma</option>
					            	                        <option value="6">Degree</option>
					            	                        <option value="10">PhD</option>
					            	                    </select>
					            	                </div>
					            	            </div>
					            	        </div>

					            	        <br>
					            	        
					            	        <div class="input-group">
					            	        	<span class="input-group-addon"><i class="zmdi zmdi-star"></i></span>
					            	        	<div class="col-sm-6">
					            	                <div class="fg-line">    
					            	                    <input type="text" class="form-control" name="work_place" placeholder="Workplace">
					            	                </div>
					            	            </div>
					            	        </div>
					            </div>

					            <div class="modal-footer">
					                <button type="submit" class="btn btn-danger"> Save </button>
					                <button type="submit" class="btn btn-default" data-dismiss="modal"> Cancel </button>
					            </div>
				            </form>

				        </div>
				    </div>
				</div>

			</div>
		</div>

	    <div class="container">
	        
	        <div class="card">
	            <div class="card-header">
	                <h2>Employees</h2> <small>List of employees and their area of specialitities with experience.</small>
	            </div>
	            
	            <div class="table-responsive">
	            	<table id="data-table-command" class="table table-striped table-vmiddle">
	                <thead>
	                    <tr>
	                    	{{-- <th data-column-id="id" data-type="numeric"> ID </th> --}}
	                    	<th data-column-id="firstname" data-type="text"> Firstname </th>
	                    	<th data-column-id="lastname" data-type="text"> Lastname </th>
	                    	<th data-column-id="residence" data-type="text"> Residence </th>
	                    	{{-- <th data-column-id="speciality" data-type="text">Speciality</th> --}}
	                    	{{-- <th data-column-id="age" data-type="numeric"> Age </th> --}}
	                        {{-- <th data-column-id="gender" data-type="text"> Gender </th> --}}
	                        {{-- <th data-column-id="employee_speciality" data-type="text"> Speciality </th> --}}
	                        {{-- <th data-colum-id="speciality"> Skills </th> --}}
	                        <th data-column-id="years_of_experience" data-type="text"> Experience (Years) </th>
	                        
	                        <th data-column-id="educational_level" data-type="text"> Educational level </th>
	                        <th data-colum-id="work_place" data-type="text"> Workplace </th>

	                        {{-- <th data-column-id="commands" data-formatter="commands" data-sortable="false"> Actions </th> --}}
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach ($employees as $employee)
	                    <tr>
	                        {{-- <td> {{$employee -> id}} </td> --}}
	                        <td> {{$employee -> firstname}} </td>
	                        <td> {{$employee -> lastname}} </td>
	                        <td> {{$employee -> residence()->pluck('name')->implode(' ')}} </td>
	                        {{-- <td> {{$employee -> speciality()->pluck('name')->implode(' ')}} </td> --}}
	                        {{-- <td> {{$employee -> age }} </td> --}}
	                        {{-- <td> {{$employee -> gender }} </td> --}}
	                        {{-- <td> {{$employee -> speciality()->pluck('name')->implode(' ')}} </td> --}}
	                        <td> {{$employee -> years_of_experience}} </td>
	                        
	                        <td> {{$employee -> educationlevel()->pluck('name')->implode(' ')}} </td>
	                        <td> {{$employee -> work_place}} </td>

	                    </tr>
	                    @endforeach
	                </tbody>
	            </table>
	        	</div>
	        </div>

	    </div>
	</section>

@endsection

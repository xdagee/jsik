@extends('layouts.master')

@section('title', 'employees')

@section('cssscript')
	<!-- page dependent script -->
	<link href="{{ asset('css/bootstrap-select.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
</head>
@endsection

@section('content')

	<section id="content">
		<div class="container">
			<div class="card">
				<div class="card-header pull-right">
					<h3>
						{{-- sample flash message --}}
						@include('flash::message')
					</h3>
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
					            			<!-- personal info -->
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
					            	        <br>

					            	        <!-- sex radio -->
					            	        <div class="input-group">
					            	        	<span class="input-group-addon"><i class="zmdi zmdi-face"></i></span>
					            	        	<div class="col-sm-4">
					            	                <div class="fg-line">
					            	                    <label>
					            	                        <i class="input-helper"></i>  
					            	                        Sex
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
					            	        <br>

					            	        <!-- dateofbirth date picker -->
					            	        <div class="input-group">

					            	        	<span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
					            	        	<div class="col-sm-6">
					            	                <div class="fg-line">    
					            	                    <input type="text" class="form-control date-picker" id="dob" name="dob" placeholder="Date of Birth">
					            	                </div>
					            	            </div>
					            	        
					            	        	<!-- pllace of birth dropdow selection from db-->
					            	        	{{-- <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span> --}}
					            	            <div class="col-sm-6">
					            	                <div class="fg-line">
					            	                    <select class="selectpicker" name="place_of_birth_id" required>
					            	                    	@foreach ($placeofbirths as $placeofbirth)
					            	                    		<option value="{{$placeofbirth->id}}"> {{$placeofbirth->name}} </option>
					            	                    	@endforeach
					            	                    </select>
					            	                </div>
					            	            </div>
					            	        </div>

					            	        <br>
					            	        <br>

					            	        <!-- ethnicity dropdown from db -->
					            	        <div class="input-group">

					            	        	<span class="input-group-addon"><i class="zmdi zmdi-star"></i></span>
					            	        	<div class="col-sm-6">
					            	                <div class="fg-line">    
					            	                    <select class="selectpicker" name="ethnicity_id" required>
					            	                    	@foreach ($ethnicities as $ethnicity)
					            	                    		<option value="{{$ethnicity->id}}"> {{$ethnicity->name}} </option>
					            	                    	@endforeach
					            	                    </select>
					            	                </div>
					            	            </div>
					            	        
					            	        	<!-- religion dropdown selection from db-->
					            	        	{{-- <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span> --}}
					            	            <div class="col-sm-6">
					            	                <div class="fg-line">
					            	                    <select class="selectpicker" name="religion_id" required>
					            	                    	@foreach ($religions as $religion)
					            	                    		<option value="{{$religion->id}}"> {{$religion->name}} </option>
					            	                    	@endforeach
					            	                    </select>
					            	                </div>
					            	            </div>
					            	        </div>

					            	        <br>
					            	        <br>
					            	        	<!-- residence dropdown from db -->
					            	        	<div class="input-group">
					            	        		<span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
					            	        		<div class="col-sm-6">
					            	        	        <div class="fg-line">    
					            	        	            <select class="selectpicker" name="residence_id" required>
					            	        	            	@foreach ($residences as $residence)
					            	        	            		<option value="{{$residence->id}}"> {{$residence->name}} </option>
					            	        	            	@endforeach
					            	        	            </select>
					            	        	        </div>
					            	        	    </div>
					            	        	
					            	        		<!-- years at current residence -->
					            	        		{{-- <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span> --}}
					            	        	    <div class="col-sm-6">
					            	        	        <div class="fg-line">
					            	        	            <input type="number" class="form-control" name="years_at_residence" placeholder="Years at Current Residence">
					            	        	        </div>
					            	        	    </div>
					            	        	</div>

					            	        <br>
					            	        <br>

					            	        <!-- educational level; dropdown from db -->
					            	        <div class="input-group">
					            	        	<span class="input-group-addon"><i class="zmdi zmdi-trending-up"></i></span>
					            	        	<div class="col-sm-6">
					            	                <div class="fg-line">    
					            	                    <select class="selectpicker" name="education_level_id" required>
					            	                    	@foreach ($educationallevels as $educationallevel)
					            	                    		<option value="{{$educationallevel->id}}"> {{$educationallevel->name}} </option>
					            	                    	@endforeach
					            	                    </select>
					            	                </div>
					            	            </div>
					            	        </div>

					            	        <br>
					            	        <br>

					            	        <!-- skills; dropdown from db -->
					            	        <div class="input-group">

					            	        	<span class="input-group-addon"><i class="zmdi zmdi-star"></i></span>
					            	        	<div class="col-sm-6">
					            	                <div class="fg-line">
					            	                    <select class="selectpicker" name="area_of_speciality_id" required>
					            	                    	@foreach ($specialities as $speciality)
					            	                    		<option value="{{$speciality->id}}"> {{$speciality->name}} </option>
					            	                        @endforeach
					            	                    </select>
					            	                </div>
					            	            </div>
					            	        </div>

					            	        <br>
					            	        <br>
					            	        
					            	        <div class="input-group">
					            	        	<span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
					            	        	<div class="col-sm-6">
					            	                <div class="fg-line">    
					            	                    <input type="text" class="form-control" name="work_place" placeholder="Current Workplace">
					            	                </div>
					            	            </div>

					            	            {{-- <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span> --}}
					            	            <div class="col-sm-6">
					            	                <div class="fg-line">
					            	                    <input type="number" class="form-control" name="years_at_workplace" placeholder="Years at Current Workplace">
					            	                </div>
					            	            </div>
					            	        </div>
					            	        
					            	        <br>
					            	        <br>
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
	                <h2>Employees</h2> <small>List of employees and their area of specialities with experience.</small>
	            </div>
	            
	            <div class="table-responsive">
	            	<table id="employees_datatable" class="table table-striped table-vmiddle">
	                <thead>
	                    <tr>
	                    	{{-- <th data-column-id="id" data-type="numeric"> ID </th> --}}
	                    	<th data-column-id="firstname" data-type="text"> Firstname </th>
	                    	<th data-column-id="lastname" data-type="text"> Lastname </th>
	                    	<th data-column-id="age" data-type="numeric"> Age </th>
	                        {{-- <th data-column-id="gender" data-type="text"> Gender </th> --}}
	                        <th data-column-id="speciality" data-type="text"> Area of Speciality </th>
	                        <th data-column-id="years_at_workplace" data-type="numeric"> Work Experience </th>
	                        <th data-colum-id="work_place" data-type="text"> Workplace </th>
	                        {{-- <th data-colum-id="years_at_residence" data-type="text"> Years Res. </th> --}}
	                        {{-- <th data-colum-id="residence" data-type="text"> Residence </th> --}}
	                        {{-- <th data-colum-id="place_of_birth" data-type="text"> Place of birth </th> --}}
	                        <th data-column-id="educational_level" data-type="text"> Educational level </th>
	                        {{-- <th data-colum-id="religion" data-type="text"> Religion </th> --}}
	                        {{-- <th data-colum-id="ethnicity" data-type="text"> Ethnicity </th> --}}

	                        {{-- <th data-column-id="commands" data-formatter="commands" data-sortable="false"> Actions </th> --}}
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach ($employees as $employee)
	                    <tr>
	                        {{-- <td> {{$employee -> id}} </td> --}}
	                        <td> {{$employee -> firstname}} </td>
	                        <td> {{$employee -> lastname}} </td>
	                        <td> {{$employee -> age }} </td>
	                        {{-- <td> {{$employee -> gender }} </td> --}}
	                        <td> {{$employee -> specialities()->pluck('name')->implode(' ')}} </td>
	                        <td> {{$employee -> years_at_workplace}} </td>
	                        <td> {{$employee -> work_place}} </td>
	                        {{-- <td> {{$employee -> years_at_residence}} </td> --}}
	                        {{-- <td> {{$employee -> residence_id}} </td> --}}
	                        {{-- <td> {{$employee -> place_of_birth_id}} </td> --}}
	                        <td> {{$employee -> educationlevel()->pluck('name')->implode(' ')}} </td>
	                        {{-- <td> {{$employee -> religion_id}} </td> --}}
	                        {{-- <td> {{$employee -> ethnicity_id}} </td> --}}
	                        {{-- <td> {{$employee -> work_place}} </td> --}}

	                    </tr>
	                    @endforeach
	                </tbody>
	            </table>
	        	</div>
	        </div>

	    </div>
	</section>

@endsection

@section('jsscript')

	<script src="{{ asset('js/moment.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-select.js') }}"></script>

	<!-- dob datetimepicker -->
	<script type="text/javascript">
	    $(document).ready(function () {
	        $('#dob').datetimepicker({
	          format: "yyyy-mm-dd",
	          autoclose: true
	        });
	    });
	</script>

	<!-- Data Table -->
	<script type="text/javascript">
	    $(document).ready(function(){            
	        // Command Buttons
	        $("#employees_datatable").bootgrid({
	            css: {
	                icon: 'zmdi icon',
	                iconColumns: 'zmdi-view-module',
	                iconDown: 'zmdi-expand-more',
	                iconRefresh: 'zmdi-refresh',
	                iconUp: 'zmdi-expand-less'
	            },
	            formatters: {
	                "commands": function(column, row) {
	                    return "<button type=\"button\" class=\"btn btn-icon command-edit\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\"></span></button> " + 
	                        "<button type=\"button\" class=\"btn btn-icon command-delete\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button>";
	                }
	            }
	        });
	    });
	</script>
@endsection

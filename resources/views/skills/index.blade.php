@extends('layouts.master')

@section('content')

	<section id="content">
		<div class="container">
			<div class="card">
				<div class="card-header pull-right">
					<a data-toggle="modal" href="#addSkill" class="btn btn-primary">Add Skill</a>
				</div>

				<div class="modal fade" id="addSkill" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
				    <div class="modal-dialog">
				        <div class="modal-content">
				            <div class="modal-header">
				                <h4 class="modal-title">Add New Skill</h4>
				            </div>

				            <form role="form" method="POST" action="{{ url('skills') }}">
				            	{{ csrf_field() }}
					            <div class="modal-body">
					            	<div class="form-group fg-line">
					                    <input type="text" name="name" class="form-control input-sm" id="inputName" placeholder="Name" required>
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
	                <h2>Skills</h2> <small>Employee skills.</small>
	            </div>
	            
	            <div class="table-responsive">
	            <table id="data-table-basic" class="table table-striped">
	                <thead>
	                    <tr>
	                        <th data-column-id="id" data-type="numeric"> ID </th>
	                        <th data-column-id="name"> Name </th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach ($skills as $skill)
	                    <tr>
	                        <td> {{$skill -> id}} </td>
	                        <td> {{$skill -> name}} </td>
	                    </tr>
	                    @endforeach
	                </tbody>
	            </table>
	            </div>
	        </div>
	    </div>

	</section>

@endsection
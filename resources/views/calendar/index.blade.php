@extends('layouts.master')

@section('content')
	<section id="main">
	    <section id="content">
	        <div class="container">
	            
	            <div id="calendar"></div>
	            
	            <!-- Add event -->
	            <div class="modal fade" id="addNew-event" data-backdrop="static" data-keyboard="false">
	                <div class="modal-dialog">
	                    <div class="modal-content">
	                        <div class="modal-header">
	                            <h4 class="modal-title">Add an Event</h4>
	                        </div>
	                        <div class="modal-body">
	                            <form class="addEvent" role="form">
	                                <div class="form-group">
	                                    <label for="eventName">Event Name</label>
	                                    <div class="fg-line">
	                                        <input type="text" class="input-sm form-control" id="eventName" placeholder="eg: Sports day">
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group">
	                                    <label for="eventName">Tag Color</label>
	                                    <div class="event-tag">
	                                        <span data-tag="bgm-teal" class="bgm-teal selected"></span>
	                                        <span data-tag="bgm-red" class="bgm-red"></span>
	                                        <span data-tag="bgm-pink" class="bgm-pink"></span>
	                                        <span data-tag="bgm-blue" class="bgm-blue"></span>
	                                        <span data-tag="bgm-lime" class="bgm-lime"></span>
	                                        <span data-tag="bgm-green" class="bgm-green"></span>
	                                        <span data-tag="bgm-cyan" class="bgm-cyan"></span>
	                                        <span data-tag="bgm-orange" class="bgm-orange"></span>
	                                        <span data-tag="bgm-purple" class="bgm-purple"></span>
	                                        <span data-tag="bgm-gray" class="bgm-gray"></span>
	                                        <span data-tag="bgm-black" class="bgm-black"></span>
	                                    </div>
	                                </div>
	                                
	                                <input type="hidden" id="getStart" />
	                                <input type="hidden" id="getEnd" />
	                            </form>
	                        </div>
	                        
	                        <div class="modal-footer">
	                            <button type="submit" class="btn btn-link" id="addEvent">Add Event</button>
	                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	</section>
@endsection
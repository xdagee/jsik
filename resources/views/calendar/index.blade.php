@extends('layouts.master')

@section('title', 'calendar')

@section('cssscript')
	<!-- page dependent script -->
	<link href="{{ asset('css/fullcalendar.min.css') }}" rel="stylesheet">
</head>
@endsection

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

@section('script')
	
	<script src="{{ asset('js/moment.min.js') }}"></script>
	<script src="{{ asset('js/fullcalendar.min.js') }}"></script>
	<!-- calendar -->
	<script type="text/javascript">
	    $(document).ready(function() {
	        var date = new Date();
	        var d = date.getDate();
	        var m = date.getMonth();
	        var y = date.getFullYear();

	        var cId = $('#calendar'); //Change the name if you want. I'm also using this add button for more actions

	        //Generate the Calendar
	        cId.fullCalendar({
	            header: {
	                right: '',
	                center: 'prev, title, next',
	                left: ''
	            },

	            theme: true, //Do not remove this as it ruin the design
	            selectable: true,
	            selectHelper: true,
	            editable: true,

	            //Add Events
	            events: [
	                {
	                    title: 'Hangout with friends',
	                    start: new Date(y, m, 1),
	                    allDay: true,
	                    className: 'bgm-cyan'
	                },
	                {
	                    title: 'Meeting with client',
	                    start: new Date(y, m, 10),
	                    allDay: true,
	                    className: 'bgm-orange'
	                },
	                {
	                    title: 'Repeat Event',
	                    start: new Date(y, m, 18),
	                    allDay: true,
	                    className: 'bgm-amber'
	                },
	                {
	                    title: 'Semester Exam',
	                    start: new Date(y, m, 20),
	                    allDay: true,
	                    className: 'bgm-green'
	                },
	                {
	                    title: 'Soccor match',
	                    start: new Date(y, m, 5),
	                    allDay: true,
	                    className: 'bgm-lightblue'
	                },
	                {
	                    title: 'Coffee time',
	                    start: new Date(y, m, 21),
	                    allDay: true,
	                    className: 'bgm-orange'
	                },
	                {
	                    title: 'Job Interview',
	                    start: new Date(y, m, 5),
	                    allDay: true,
	                    className: 'bgm-amber'
	                },
	                {
	                    title: 'IT Meeting',
	                    start: new Date(y, m, 5),
	                    allDay: true,
	                    className: 'bgm-green'
	                },
	                {
	                    title: 'Brunch at Beach',
	                    start: new Date(y, m, 1),
	                    allDay: true,
	                    className: 'bgm-lightblue'
	                },
	                {
	                    title: 'Live TV Show',
	                    start: new Date(y, m, 15),
	                    allDay: true,
	                    className: 'bgm-cyan'
	                },
	                {
	                    title: 'Software Conference',
	                    start: new Date(y, m, 25),
	                    allDay: true,
	                    className: 'bgm-lightblue'
	                },
	                {
	                    title: 'Coffee time',
	                    start: new Date(y, m, 30),
	                    allDay: true,
	                    className: 'bgm-orange'
	                },
	                {
	                    title: 'Job Interview',
	                    start: new Date(y, m, 30),
	                    allDay: true,
	                    className: 'bgm-green'
	                },
	            ],
	             
	            //On Day Select
	            select: function(start, end, allDay) {
	                $('#addNew-event').modal('show');   
	                $('#addNew-event input:text').val('');
	                $('#getStart').val(start);
	                $('#getEnd').val(end);
	            }
	        });

	        //Create and ddd Action button with dropdown in Calendar header. 
	        var actionMenu = '<ul class="actions actions-alt" id="fc-actions">' +
	                            '<li class="dropdown">' +
	                                '<a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>' +
	                                '<ul class="dropdown-menu dropdown-menu-right">' +
	                                    '<li class="active">' +
	                                        '<a data-view="month" href="">Month View</a>' +
	                                    '</li>' +
	                                    '<li>' +
	                                        '<a data-view="basicWeek" href="">Week View</a>' +
	                                    '</li>' +
	                                    '<li>' +
	                                        '<a data-view="agendaWeek" href="">Agenda Week View</a>' +
	                                    '</li>' +
	                                    '<li>' +
	                                        '<a data-view="basicDay" href="">Day View</a>' +
	                                    '</li>' +
	                                    '<li>' +
	                                        '<a data-view="agendaDay" href="">Agenda Day View</a>' +
	                                    '</li>' +
	                                '</ul>' +
	                            '</div>' +
	                        '</li>';


	        cId.find('.fc-toolbar').append(actionMenu);
	        
	        //Event Tag Selector
	        (function(){
	            $('body').on('click', '.event-tag > span', function(){
	                $('.event-tag > span').removeClass('selected');
	                $(this).addClass('selected');
	            });
	        })();
	    
	        //Add new Event
	        $('body').on('click', '#addEvent', function(){
	            var eventName = $('#eventName').val();
	            var tagColor = $('.event-tag > span.selected').attr('data-tag');
	                
	            if (eventName != '') {
	                //Render Event
	                $('#calendar').fullCalendar('renderEvent',{
	                    title: eventName,
	                    start: $('#getStart').val(),
	                    end:  $('#getEnd').val(),
	                    allDay: true,
	                    className: tagColor
	                    
	                },true ); //Stick the event
	                
	                $('#addNew-event form')[0].reset()
	                $('#addNew-event').modal('hide');
	            }
	            
	            else {
	                $('#eventName').closest('.form-group').addClass('has-error');
	            }
	        });   

	        //Calendar views
	        $('body').on('click', '#fc-actions [data-view]', function(e){
	            e.preventDefault();
	            var dataView = $(this).attr('data-view');
	            
	            $('#fc-actions li').removeClass('active');
	            $(this).parent().addClass('active');
	            cId.fullCalendar('changeView', dataView);  
	        });
	    });                        
	</script>
@endsection

@section('jsscript')
	<script src="{{ asset('js/moment.min.js') }}"></script>
	<script src="{{ asset('js/fullcalendar.min.js') }}"></script>

	    <!-- calendar -->
	    <script type="text/javascript">
	        $(document).ready(function() {
	            var date = new Date();
	            var d = date.getDate();
	            var m = date.getMonth();
	            var y = date.getFullYear();

	            var cId = $('#calendar'); //Change the name if you want. I'm also using this add button for more actions

	            //Generate the Calendar
	            cId.fullCalendar({
	                header: {
	                    right: '',
	                    center: 'prev, title, next',
	                    left: ''
	                },

	                theme: true, //Do not remove this as it ruin the design
	                selectable: true,
	                selectHelper: true,
	                editable: true,

	                //Add Events
	                events: [
	                    {
	                        title: 'Hangout with friends',
	                        start: new Date(y, m, 1),
	                        allDay: true,
	                        className: 'bgm-cyan'
	                    },
	                    {
	                        title: 'Meeting with client',
	                        start: new Date(y, m, 10),
	                        allDay: true,
	                        className: 'bgm-orange'
	                    },
	                    {
	                        title: 'Repeat Event',
	                        start: new Date(y, m, 18),
	                        allDay: true,
	                        className: 'bgm-amber'
	                    },
	                    {
	                        title: 'Semester Exam',
	                        start: new Date(y, m, 20),
	                        allDay: true,
	                        className: 'bgm-green'
	                    },
	                    {
	                        title: 'Soccor match',
	                        start: new Date(y, m, 5),
	                        allDay: true,
	                        className: 'bgm-lightblue'
	                    },
	                    {
	                        title: 'Coffee time',
	                        start: new Date(y, m, 21),
	                        allDay: true,
	                        className: 'bgm-orange'
	                    },
	                    {
	                        title: 'Job Interview',
	                        start: new Date(y, m, 5),
	                        allDay: true,
	                        className: 'bgm-amber'
	                    },
	                    {
	                        title: 'IT Meeting',
	                        start: new Date(y, m, 5),
	                        allDay: true,
	                        className: 'bgm-green'
	                    },
	                    {
	                        title: 'Brunch at Beach',
	                        start: new Date(y, m, 1),
	                        allDay: true,
	                        className: 'bgm-lightblue'
	                    },
	                    {
	                        title: 'Live TV Show',
	                        start: new Date(y, m, 15),
	                        allDay: true,
	                        className: 'bgm-cyan'
	                    },
	                    {
	                        title: 'Software Conference',
	                        start: new Date(y, m, 25),
	                        allDay: true,
	                        className: 'bgm-lightblue'
	                    },
	                    {
	                        title: 'Coffee time',
	                        start: new Date(y, m, 30),
	                        allDay: true,
	                        className: 'bgm-orange'
	                    },
	                    {
	                        title: 'Job Interview',
	                        start: new Date(y, m, 30),
	                        allDay: true,
	                        className: 'bgm-green'
	                    },
	                ],
	                 
	                //On Day Select
	                select: function(start, end, allDay) {
	                    $('#addNew-event').modal('show');   
	                    $('#addNew-event input:text').val('');
	                    $('#getStart').val(start);
	                    $('#getEnd').val(end);
	                }
	            });

	            //Create and ddd Action button with dropdown in Calendar header. 
	            var actionMenu = '<ul class="actions actions-alt" id="fc-actions">' +
	                                '<li class="dropdown">' +
	                                    '<a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>' +
	                                    '<ul class="dropdown-menu dropdown-menu-right">' +
	                                        '<li class="active">' +
	                                            '<a data-view="month" href="">Month View</a>' +
	                                        '</li>' +
	                                        '<li>' +
	                                            '<a data-view="basicWeek" href="">Week View</a>' +
	                                        '</li>' +
	                                        '<li>' +
	                                            '<a data-view="agendaWeek" href="">Agenda Week View</a>' +
	                                        '</li>' +
	                                        '<li>' +
	                                            '<a data-view="basicDay" href="">Day View</a>' +
	                                        '</li>' +
	                                        '<li>' +
	                                            '<a data-view="agendaDay" href="">Agenda Day View</a>' +
	                                        '</li>' +
	                                    '</ul>' +
	                                '</div>' +
	                            '</li>';


	            cId.find('.fc-toolbar').append(actionMenu);
	            
	            //Event Tag Selector
	            (function(){
	                $('body').on('click', '.event-tag > span', function(){
	                    $('.event-tag > span').removeClass('selected');
	                    $(this).addClass('selected');
	                });
	            })();
	        
	            //Add new Event
	            $('body').on('click', '#addEvent', function(){
	                var eventName = $('#eventName').val();
	                var tagColor = $('.event-tag > span.selected').attr('data-tag');
	                    
	                if (eventName != '') {
	                    //Render Event
	                    $('#calendar').fullCalendar('renderEvent',{
	                        title: eventName,
	                        start: $('#getStart').val(),
	                        end:  $('#getEnd').val(),
	                        allDay: true,
	                        className: tagColor
	                        
	                    },true ); //Stick the event
	                    
	                    $('#addNew-event form')[0].reset()
	                    $('#addNew-event').modal('hide');
	                }
	                
	                else {
	                    $('#eventName').closest('.form-group').addClass('has-error');
	                }
	            });   

	            //Calendar views
	            $('body').on('click', '#fc-actions [data-view]', function(e){
	                e.preventDefault();
	                var dataView = $(this).attr('data-view');
	                
	                $('#fc-actions li').removeClass('active');
	                $(this).parent().addClass('active');
	                cId.fullCalendar('changeView', dataView);  
	            });
	        });                        
	    </script>
@endsection
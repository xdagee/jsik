    
    <footer id="footer">
        copyright &copy; 2018 jisk; made for the web with the love of technology.
    </footer>
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->
    <!-- Javascript Libraries -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.js') }}"></script>

    <script src="{{ asset('js/fullcalendar.min.js') }}"></script>
    
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-growl.min.js') }}"></script>
    <script src="{{ asset('js/sweet-alert.min.js') }}"></script>

    <script src="{{ asset('js/jquery.bootgrid.min.js') }}"></script>
    
    <!-- Placeholder for IE9 -->
    <!--[if IE 9 ]>
            <script src="js/jquery.placeholder.min.js"></script>
        <![endif]-->
    <script src="{{ asset('js/functions.js') }}"></script>
    
    <!-- flash message -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#flash-overlay-modal').modal();
            $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
        });
    </script>

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
            //Basic Example
            $("#data-table-basic").bootgrid({
                css: {
                    icon: 'zmdi icon',
                    iconColumns: 'zmdi-view-module',
                    iconDown: 'zmdi-expand-more',
                    iconRefresh: 'zmdi-refresh',
                    iconUp: 'zmdi-expand-less'
                },
            });
            
            //Command Buttons
            $("#data-table-command").bootgrid({
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
</body>

</html>
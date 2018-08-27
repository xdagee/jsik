@include ('layouts.css')

@yield('cssscript')

@include('layouts.header')

@include ('layouts.sidebar')

@yield ('content')

@include ('layouts.footer')

@include ('layouts.js')

@yield ('jsscript')
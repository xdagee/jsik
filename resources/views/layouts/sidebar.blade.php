<section id="main">

    <aside id="sidebar">
    <div class="sidebar-inner c-overflow">
        <div class="profile-menu">
            <a href="#">
                <div class="profile-pic">
                    <img src="{{asset('img/profile-pics/4.jpg')}}" alt="img-profile-pic">
                </div>
                <div class="profile-info">
                    {{ Auth::user()->name }}
                    <i class="zmdi zmdi-arrow-drop-down"></i>
                </div>
            </a>
            <ul class="main-menu">
                <li>
                    <a href="{{ url ('profile') }}"><i class="zmdi zmdi-account"></i> Profile </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">

                    <i class="zmdi zmdi-time-restore"></i> Logout </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <ul class="main-menu">
            <li class="{{Request::is('dashboard') ? 'active' : ''}}">
                <a href="{{ url ('dashboard') }}"><i class="zmdi zmdi-home"></i> Dashboard </a>
            </li>
            <li class="{{Request::is('skills') ? 'active' : ''}}">
                <a href="{{ url ('skills') }}"><i class="zmdi zmdi-trending-up"></i> Skills </a>
            </li>
            <li class="{{Request::is('employees') ? 'active' : ''}}">
                <a href="{{ url ('employees') }}"><i class="zmdi zmdi-accounts-alt"></i> Employees </a>
            </li>
            <li class="{{Request::is('calendar') ? 'active' : ''}}">
                <a href="{{ url ('calendar') }}"><i class="zmdi zmdi-calendar"></i> Calendar </a>
            </li>
        </ul>
    </div>
</aside>

</section>
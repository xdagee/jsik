<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> jsik </title>
    <!-- Vendor CSS -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <!-- CSS -->
    <link href="{{ asset('css/app.min.1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.min.2.css') }}" rel="stylesheet">

</head>

<body class="login-content">
    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        @csrf
    <!-- Login -->
    <div class="lc-block toggled" id="l-login">
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
            <div class="fg-line">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
            <div class="fg-line">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="checkbox">
            <label>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <i class="input-helper"></i> Keep me signed in
            </label>
        </div>
        <button type="submit" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
        <ul class="login-navigation">
            <li data-block="#l-register" class="bgm-red">Register</li>
            <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
        </ul>
    </div>
    <!-- Register -->
    <div class="lc-block" id="l-register">
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Username">
            </div>
        </div>
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Email Address">
            </div>
        </div>
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
            <div class="fg-line">
                <input type="password" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                <i class="input-helper"></i> Accept the license agreement
            </label>
        </div>
        <a href="#" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>
        <ul class="login-navigation">
            <li data-block="#l-login" class="bgm-green">Login</li>
            <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
        </ul>
    </div>
    <!-- Forgot Password -->
    <div class="lc-block" id="l-forget-password">
        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>
        <div class="input-group m-b-20">
            <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Email Address">
            </div>
        </div>
        <a href="#" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>
        <ul class="login-navigation">
            <li data-block="#l-login" class="bgm-green">Login</li>
            <li data-block="#l-register" class="bgm-red">Register</li>
        </ul>
    </div>
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

    </form>
    <!-- Javascript Libraries -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>
    <!-- Placeholder for IE9 -->
    {{-- [if IE 9 ]> 
        <script src="{{ asset('js/jquery.placeholder.min.js') }}"></script>
    [endif] --}}
    <script src="{{ asset('js/functions.js') }}"></script>
</body>

</html>

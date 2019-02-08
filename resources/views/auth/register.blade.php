<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="{{asset('assets/css/vendor.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
        <!-- Theme initialization -->
        {{-- <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href='{{asset('assets/css/app.css')}}'>');
            }
        </script> --}}
    </head>
    <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                            <div class="logo" style="width:100% !important;height:auto !important;">
                                {{-- <span class="l l1"></span>
                                <span class="l l2"></span>
                                <span class="l l3"></span>
                                <span class="l l4"></span>
                                <span class="l l5"></span> --}}
                                <img src="{{asset('assets/images/screenful/logo.png')}}" alt="">
                            </div>
                        </h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-center">SIGNUP TO GET INSTANT ACCESS</p>
                        <form id="signup-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="firstname">Name</label>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control underlined {{ $errors->has('name') ? ' is-invalid' : '' }}" id="firstname" placeholder="Enter Full Name" name="name" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname">Gurdian Name</label>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control underlined {{ $errors->has('name') ? ' is-invalid' : '' }}" id="" placeholder="Enter Gurdian Name" name="" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname">DOB</label>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control underlined {{ $errors->has('name') ? ' is-invalid' : '' }}" id="" placeholder="Enter DOB" name="" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname">Address</label>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea class="form-control underlined {{ $errors->has('name') ? ' is-invalid' : '' }}"  placeholder="Enter Address" name="" value="{{ old('name') }}" required autofocus></textarea>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname">Mobile</label>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control underlined {{ $errors->has('name') ? ' is-invalid' : '' }}" id="" placeholder="Enter Mobile No" name="" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control underlined {{ $errors->has('email') ? ' is-invalid' : '' }}"  id="email" placeholder="Enter Email" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="firstname">Gender</label>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <select class="form-control" name="" id="">
                                            <option value="0">Select Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                        {{-- <input type="text" class="form-control underlined {{ $errors->has('name') ? ' is-invalid' : '' }}" id="firstname" placeholder="Enter firstname" name="name" value="{{ old('name') }}" required autofocus> --}}
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="firstname">District</label>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <select class="form-control" name="" id="">
                                            <option value="0">Select District</option>
                                            <option value="1">West Bengal</option>
                                            <option value="2">Bihar</option>
                                        </select>
                                        {{-- <input type="text" class="form-control underlined {{ $errors->has('name') ? ' is-invalid' : '' }}" id="firstname" placeholder="Enter firstname" name="name" value="{{ old('name') }}" required autofocus> --}}
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="agree">
                                    <input class="checkbox" name="agree" id="agree" type="checkbox" required="">
                                    <span>Agree the terms and
                                        <a href="#">policy</a>
                                    </span>
                                </label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-center">Already have an account?
                                    <a href="{{ route('login') }}">Login!</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="text-center">
                    <a href="index.html" class="btn btn-secondary btn-sm">
                        <i class="fa fa-arrow-left"></i> Back to dashboard </a>
                </div> --}}
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        {{-- <script>
            (function(i, s, o, g, r, a, m)
            {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function()
                {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-80463319-4', 'auto');
            ga('send', 'pageview');
        </script> --}}
        <script src="{{asset('assets/js/vendor.js')}}"></script>
        <script src="{{asset('assets/js/app.js')}}"></script>
    </body>
</html>

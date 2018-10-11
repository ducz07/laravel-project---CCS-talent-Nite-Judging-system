<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/morrisjs/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
<!--<img  width="100%" height="98px" src="{{ asset('img/header1.png') }}">-->
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="pull-left"><img width="55px" src="{{ asset('img/logo.png') }}">CCS Showtime</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                @if (Auth::guest())
                             <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>{{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="fa fa-sign-out fa-fw"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            @endif
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    @if (Route::has('login'))
                    <ul class="nav" id="side-menu">
                        @if (Auth::check())
        <li>
            <a href="{{ url('/home') }}"><i class="fa fa-home" aria-hidden="true"> Home</i></a>
        </li>

        <li>
            <a href="{{ url('/participants') }}"><i class="fa fa-user" aria-hidden="true"> Participants</i></a>
        </li>

        <li>
            <a href="{{ url('/judge') }}"><i class="fa fa-users" aria-hidden="true"> Judges</i></a>
        </li>
                            
        <li>
            <a href="{{ url('/result') }}"><i class="fa fa-envelope-open" aria-hidden="true"> Results</i></a>
        </li>

        <li>
            <a href="{{ url('/tabulate') }}"><i class="fa fa-folder-open" aria-hidden="true"> Tabulation</i></a>
        </li>

        <li>
            <a href="{{ url('/user') }}"><i class="fa fa-user" aria-hidden="true"> User</i></a>
        </li>
             @endif
                    @endif
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome Admin...{{ Auth::user()->name }}</h1>
                </div>
                <!-- /.col-lg-12 -->   
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

    
<!--@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>

@endsection-->


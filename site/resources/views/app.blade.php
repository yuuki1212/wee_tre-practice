<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/propeller.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/app_wee.css')}}" rel="stylesheet"/>
    <title>@yield('title')</title>
<body>
<nav class="navbar navbar-fixed-top pmd-navbar pmd-z-depth">
    <div class="container-fluid ">
        <div class="navbar-header">
            <button class="pmd-ripple-effect navbar-toggle pmd-navbar-toggle" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ url('/') }}" class="navbar-brand ">ウィートレ！</a>
        </div>
        <!-- ナビゲーション -->
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse pmd-navbar-sidebar">
            <div class="dropdown pmd-dropdown pmd-user-info pull-right">
                <a href="javascript:void(0);" class="btn-user dropdown-toggle media" data-toggle="dropdown" data-sidebar="true" aria-expanded="false">
                    <div class="media-left">
                        <img src="http://propeller.in/assets/images/avatar-icon-40x40.png" width="40" height="40" alt="avatar">
                    </div>
                    <div class="media-body media-middle">
                        User
                    </div>
                    <div class="media-right media-middle">
                        <i class="material-icons md-dark pmd-sm">more_vert</i>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li><a href="javascript:void(0);">Edit Profile</a></li>
                    <li><a href="javascript:void(0);">Logout</a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="pmd-ripple-effect" href="javascript:void(0);">Link</a></li>
                <li class="dropdown pmd-dropdown">
                    <a aria-expanded="false" role="button" data-toggle="dropdown" data-sidebar="true" class="pmd-ripple-effect dropdown-toggle" href="javascript:void(0);">Dropdown <span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li><a class="pmd-ripple-effect" href="javascript:void(0);">Action</a></li>
                        <li><a class="pmd-ripple-effect" href="javascript:void(0);">Another action</a></li>
                        <li><a class="pmd-ripple-effect" href="javascript:void(0);">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a class="pmd-ripple-effect" href="javascript:void(0);">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
    <div class="pmd-sidebar-overlay"></div>
</nav>
<div class="col-md-12">
    <div class="">
        @yield('content')
    </div>
</div>
<script src="{{ asset('js/jquery-3.1.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/propeller.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/moment-with-locales.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.datetimepicker.full.min.js') }}"></script>
<script src="{{ asset('js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('js/jszip.min.js') }}"></script>
</body>
</html>
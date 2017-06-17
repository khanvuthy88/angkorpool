<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Angkor Pool</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('css/font.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body>
@include('partial.top-navigation')
<div class="d-flex">
    <div class="content p-3" style="flex: 1;">
        @yield('content')
        @include('partial.footer')
    </div>
    <div class="page-sidebar collapse-menu p-3" style="min-width: 235px; background-color: #364150;">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fa fa-search"></i><span>Search Jobs</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-file-o"></i><span>Applied Jobs</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-newspaper-o"></i><span>Daily Job alerts</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link clearfix" href="#">
                <i class="fa fa-user"></i>
                <span>My Profile</span>
                <span class="arrow"><i class="fa fa-chevron-right"></i></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link ">CV</a>
                    <a href="#" class="nav-link ">Education</a>
                    <a href="#" class="nav-link ">Experience</a>
                    <a href="#" class="nav-link ">Change Password</a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-envelope-o"></i><span>Messages</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-question-circle"></i><span>FAQ</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-sign-out"></i><span>Logout</span></a>
          </li>
        </ul>
    </div>
</div>
<script src="{{ url('js/jquery.js') }}"></script>
<script src="{{ url('js/bootstrap.js') }}"></script>
<script src="{{ url('js/bootstrap-datepicker.min.js') }}"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd'
    });
</script>
</body>
</html>

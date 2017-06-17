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
<div class="middle-wrapper d-flex flex-column flex-lg-row">
    <div class="page-sidebar collapse-menu">
        @include('partial.side-nav')
    </div>
    <div class="content-wrapper p-3">
        @yield('content')
        @include('partial.footer')
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

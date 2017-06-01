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
    <link rel="stylesheet" href="{{ url('css/bulma.css') }}">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body class="{{ auth()->check() ?: 'bg-white'}}">
@include('partial.top-navigation')
@yield('content')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ url('js/jquery.js') }}"></script>
<script src="{{ url('js/bulma.js') }}"></script>
</body>
</html>
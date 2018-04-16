<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

       <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login Page</title>
        
        
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
     
    <link rel="stylesheet" href="{{asset('css/logtemp.css')}}">
</head>

<body  style="background-image:url({{url('/img/loginpg.jpg')}})">
       <div class="container transparency">
           @yield('content')
        </div>
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>
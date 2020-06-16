<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EVOTING BEM</title>
    <link rel="stylesheet" href="{{ asset('css/csslanding.css') }}">
    @yield('additional-style')
</head>
<body>
   <nav>
       <h1>E-voting</h1>
       <hr>
   </nav>

   @yield('content')

    
    <!-- Bootstrap  JS -->
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
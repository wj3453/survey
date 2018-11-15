<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>แบบสอบถาม</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Kanit:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfgpIhXtMr0LUMBjKoJsd6eeUYxvEUiAg&callback=initMap&language=th" type="text/javascript"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
    <body>
        @yield('content')
    </body>
    
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</html>

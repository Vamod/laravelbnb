<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaravelBnb</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- defer fa si che la pagina sia totalmente caricata --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
        

    </head>
    <body>
        <div id="app">
            <index></index>
        </div>
       
    </body>
</html>

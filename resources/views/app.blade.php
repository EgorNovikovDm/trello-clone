<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trello</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"/>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="h-screen text-gray-800">
    <div id="app" class="h-full">
        <Board></Board>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

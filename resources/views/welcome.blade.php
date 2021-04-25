<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Healthify10</title>
    </head>
    <body>
    <div>
    </div>
        <div id="app">
              <app :fooditems="{{$fooditems}}"></app>
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>

</html>

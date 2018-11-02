<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>廣西師範大學古籍書目檢索平臺</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <search></search>
        </div>
        <footer class="row justify-content-center">
            <div id="copyright">
                &copy; 廣西師範大學圖書館. {{ date('Y') }}.
            </div>
        </footer>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>

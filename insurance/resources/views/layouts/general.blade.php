<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ __('Insurance form') }}</title>

        <!-- scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css" />

        <!-- style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/global.css') }}" />

        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navForm">
            <a class="navbar-brand" href="#"><img src="{{ asset('images/InsuranceQuoteLab.png') }}" height="36px"/></a>
        </nav>
        <div id="appcontent" class="container">
        @yield('content')
        </div>
    </body>
</html>
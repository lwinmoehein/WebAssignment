<html>

<head>
    <title>Intern Assignment</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="{{asset('favicon.png')}}"/>


</head>

<body>
    <div class="wrapper">
        <header>{{config('app.name')}} : @yield('title')</header>
        <aside>
            @include('layouts.side-bar')
        </aside>
        <div class="content">
         @yield('content')
        </div>

      </div>
</body>

</html>

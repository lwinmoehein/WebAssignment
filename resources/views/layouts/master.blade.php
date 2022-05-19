<html>

<head>
    <title>Intern Assignment</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="{{asset('favicon.png')}}"/>

</head>

<body class="main_layout">
    <div class="side_bar">
        @include('layouts.side-bar')
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>

</html>

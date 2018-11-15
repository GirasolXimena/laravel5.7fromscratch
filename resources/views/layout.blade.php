<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'test')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css"
</head>
<body>
    <ul>
        <li>
            Learn <a href="/about">about us</a>
        </li>
        <li>
            Go <a href="/">home</a>
        </li>
        <li>
            <a href="/contact">Contact</a> us
        </li>
    </ul>
    @yield('content')
</body>
</html>

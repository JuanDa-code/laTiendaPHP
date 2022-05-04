<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
    <title>La Tienda de PHP</title>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo center">Logo</a>
        <ul class="left hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li class="active"><a href="collapsible.html">JavaScript</a></li>
        </ul>
        </div>
    </nav>

    @yield('contenido')

</body>
</html>
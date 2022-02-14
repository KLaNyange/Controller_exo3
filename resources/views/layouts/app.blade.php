<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controller_Exo3</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{route("home")}}">Home</a>
            <a href="{{route("user")}}">User</a>
        </nav>
    </header>
    @yield('content')
</body>
</html>
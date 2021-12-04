<!doctype html>
<html lang='en'>

<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/p3.css' rel='stylesheet'>

    @yield('head')

</head>

<body>

    <header>
        <img id='logo' src='/images/hand_icon.png' alt='Guessing Game Logo'>
        <h1>Number Guessing Game</h1>
    </header>

    <main>
        @yield('content')
    </main>

    @yield('body')

</body>

</html>

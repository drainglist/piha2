<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Мой сайт')</title>
</head>
<body>
    <header>
        <nav>
            <a href="/">Главная</a> |
            <a href="/about">О нас</a> |
            <a href="/contacts">Контакты</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Голубев Егор Денисович, Группа: Группа: 251-3210</p>
    </footer>
</body>
</html>
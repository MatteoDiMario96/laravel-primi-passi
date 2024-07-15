<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    <header>
        Benvenut*
    </header>
    <main>
        <h2>
            Questa è la homepage del sito
        </h2>

        <h1>
            Hello World!
        </h1>

        <ul>
            <li>
                {{ $name }}
            </li>
            <li>
                {{ $surname }}
            </li>
            <li>
                {{ $age }}
            </li>
            <li>
                @if ($isMarried === true)
                    Sposato
                @else
                    Non sposato
                @endif
            </li>
        </ul>
    </main>
    <footer>
        <a href="/about-us">Scopri di più su di noi!</a>
        <a href="/work-with-us">Scopri come lavorare con noi</a>
    </footer>
</body>
</html>

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
        <h1>
            Benvenut*
        </h1>
    </header>
    <main>
        <h2>
            Questa è la homepage del sito
        </h2>

        <h1>
            Hello World!
        </h1>

        <ul>
            @foreach ($data as $user )
            <li>
                Nome: {{ $user['name'] }}
                Cognome: {{ $user['surname']}}
                Età: {{ $user['age'] }}
                Stato Civile: @if ($user['isMarried'] === true)
                    Sposato
                @else
                    Celibe
                @endif
            </li>
            @endforeach
        </ul>
    </main>
    <footer>
        <a href="/about-us">Scopri di più su di noi!</a>
        <a href="/work-with-us">Scopri come lavorare con noi</a>
    </footer>
</body>
</html>

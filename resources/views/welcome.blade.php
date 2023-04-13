<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online school</title>
</head>
<body>
    <header>
        <nav>
            <a href="/courses/create">Vak aanmaken</a>
            <a href="/lokalen/create">Lokaal aanmaken</a>
        </nav>
        <h1>Online school Applicatie aangepast door Fedde</h1>
    </header>
    <main>
        <div class="courses">
            <h2>Vakken van de online school:</h2>
            <ul>
                @foreach($courses as $course)
                    <li> {{ $course->name }} - {{ $course->description }} </li>
                @endforeach
            </ul>
        </div>

        <div class="lokalen">
            <h2>Lokalen van onze online school</h2>
            <ul>
                @foreach($lokalen as $lokaal)
                    <li>
                        {{ $lokaal->name }} - capaciteit: {{ $lokaal->capacity }} personen
                        <br>
                        @if ($lokaal->has_screen)
                            scherm aanwezig
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
    <footer></footer>
</body>
</html>

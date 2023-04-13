<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Online school</title>
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <a href="/courses/create">Vak aanmaken</a>
                <a href="/lokalen/create">Lokaal aanmaken</a>
            </nav>
            <h1>Online school Applicatie</h1>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>copyright Online SuperSchool {{ Date('Y') }}</footer>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Laravel App' }}</title>
</head>
<body>
    <header>
        <h1>Laravel CRUD</h1>
    </header>

    <main>
        {{ $slot }}
    </main>
</body>
</html>

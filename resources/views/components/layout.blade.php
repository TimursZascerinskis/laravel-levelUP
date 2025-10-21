<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? 'Laravel CRUD App' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <x-navigation />

    <header class="header">
        <div class="container">
            <h1>{{ $title ?? 'Laravel CRUD' }}</h1>
        </div>
    </header>

    <main class="container main-content">
        {{ $slot }}
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Laravel CRUD App. Visas tiesības aizsargātas.</p>
        </div>
    </footer>

</body>
</html>

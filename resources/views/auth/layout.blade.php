<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita App | Otorisasi</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body >
    <main class="bg-body-secondary">
        <section class="d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="card w-75 mb-3">
                @yield('content')
            </div>
        </section>
    </main>
</body>
</html>
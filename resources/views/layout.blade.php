<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita App</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <header>
        <nav class="navbar bg-primary rounded-2 p-3">
            <div class="container-fluid">
              <a href="/" class="navbar-brand text-bg-primary fs-4">Berita APP</a>
              @guest
              <span class="navbar-text text-bg-primary">
                Jadi Penulis? <a href="/login" class="text-reset text-decoration-none">Login</a>
              </span>
              @endguest
              @auth
              <a href="/dashboard">
                <p class="navbar-text text-bg-primary">{{Auth::user()->username}}</p>
              </a>
              @endauth
            </div>
          </nav>
    </header>
    <main class="bg-body-tertiary">
      <section class="p-2">
        @yield('content')
      </section>  
    </main>
</body>
</html> 
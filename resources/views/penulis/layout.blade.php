<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Berita</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css'])
</head>
<body>
    <header>
        <nav class="navbar bg-primary p-3">
            <div class="container-fluid">
              <a href="/" class="navbar-brand text-bg-primary fs-4">Dashboard</a>
              <span class="navbar-text text-bg-primary">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-reset" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{Auth::user()->username}}
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('logOut')}}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                      <form action="{{route('logOut')}}" id="logout-form" method="POST">@csrf</form>
                    </ul>
                </div>
              </span>
            </div>
          </nav>
    </header>
    <main class="bg-body-tertiary">
        <div class="d-flex" style="width: 100vh">
            <section class=" text-center text-white">
                <div class="bg-primary rounded-end" style="height: 89vh; width: 35vh">
                    <div>
                        <a href="#home" class="text-decoration-none text-reset"><p>Home</p></a>
                    </div>
                    <div>
                        <a href="#berita" class="text-decoration-none text-reset"><p>Berita</p></a>
                    </div>
                    <div>
                        <a href="#comment" class="text-decoration-none text-reset"><p>Comment</p></a>
                    </div>
                </div>
            </section>
            <section class="p-2">
                @yield('content')
            </section>
        </div>
    </main>
</body>
</html>
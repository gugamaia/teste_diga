<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        
        <!-- CSS bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- CSS da aplicação-->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
        
    </head>
    
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="digateste/public/img/background_movies.jpg" alt="Lista de Filmes">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">O que quero</a>
                        </li>
                        <li class="nav-item">
                            <a href="register" class="nav-link">Cadastro de Pessoas</a>
                        </li>

                        <li class="nav-item">
                            <a href="list" class="nav-link">Lista de Filmes</a>
                        </li>

                        <li class="nav-item">
                            <a href="movies" class="nav-link">Cadastro de Filme</a>
                        </li>

                        <li class="nav-item">
                            <a href="tag" class="nav-link">Cadastro de Tag</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')

        <footer>
            <p>Copyright Gustavo Maia &copy; 2022</p>
        </footer>

     </body>
</html>

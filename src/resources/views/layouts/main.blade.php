<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
                        
            <!--Fonte do Google -->

            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 

            <!--CSS Bootstrap -->

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

            <!--CSS da Aplicação -->
            <link rel="stylesheet" href="/CSS/styles.css">
             <script src="JS/scrits"></script>
    </head>
    <body>
            <header>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbar">
                        <a href="/" class="navbar-brand">
                            <img src="\IMG\v4sj6xoi.bmp" alt="HDC Events">
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/events/create" class="nav-link">Criar Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a href="/" class="nav-link">Cadastrar</a>
                            </li>
                        </ul>
                    </div>

                </nav>                    
            </header>
           <main>
               <div class="container-fluid">
                   <div class="row">
                       @if (session('msg'))
                           <p class="msg">{{ session('msg') }}</p>
                       @endif
                       @yield('content')
                   </div>
               </div>
           </main>
            <footer>
                <p>ADLS DEVELOPER &copy; 2022</p>
            </footer>
            <!--Icones do Projeto 'ionicons' -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
    
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!--Font dogoogle-->
            <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!--css Bootstrap-->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <!--css da aplicação-->
        <link rel="stylesheet" href="/css/stilo.css">
        <script src="/javascript/script.js"></script>

    </head>
    <body>
     <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse"  id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/CriarProduto" class="nav-link">Cadastrar Novo Produto</a>
                    </li>
                    <li class="nav-item">
                        <a href="/cidades" class="nav-link">listar todas as cidades</a>
                    </li>                
                </ul>  
            </div>
        </nav>
     </header>   
    @yield('content')
    <footer>
        <p> Licitanet teste 1</p>
    </footer>
    </body>
</html>

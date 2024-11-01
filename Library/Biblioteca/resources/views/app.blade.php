<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Biblioteca</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="/livros">Listar Livros</a></li>
                    <li class="nav-item"><a class="nav-link" href="/livros/adicionar">Adicionar Livro</a></li>
                </ul>
            </div>
        </nav>
        <div class="mt-4">
            @yield('content')
        </div>
    </div>
</body>
</html>
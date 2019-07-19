<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <p>Cabeçalho do site</p>
    </header>
        <main>
        <!-- aqui eu quero uma caixa onde eu vou colocar conteúdo, que quando as outras 
        paginas forem utilizar essa página elas vao colocar ai dentro o conteúo -->
            @yield('main')
        </main>
    <footer>
        <p>Rodapé do site</p>
    </footer>
</body>
</html>
<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <title>Controque de estoque</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand" href="/produtos">Estoque com Laravel</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{action('ProdutoController@lista')}}">Listagem</a> </li>
                <li><a href="{{action('ProdutoController@novo')}}">Cadastro</a> </li>
            </ul>
        </div>
    </nav>
    @yield('conteudo')

    <footer class="footer">
        <p>Desenvolvido por<a href="www.github.com/mateuzus" target="_blank"> Mateus Marcelino</a></p>
    </footer>
</div>
</body>
</html>

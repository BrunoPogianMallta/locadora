<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Painel Administrativo</title>
</head>

<body>
    <div id="cabecalho-adm">
        <img id="avatar" src="../img/avatar.jpg" />
        <div id="saudacoes">Bem vindo! <?php session_start();
                                        echo $_SESSION['nome_admin']; ?></div>

        <div id="itens-direita">
            <img id="itens-header" src="../img/comentarios.png" />
            <p>Comentários</p>
            <button class="button"> <img id="seta" src="../img/seta_voltar.png" />Logout</button>
        </div>

    </div>
    <div id="header2">
        <img id="logo" src="../img/logo.png" />
    </div>

    <div id="corpo-painel">
        <div id="menu-lateral">
            <ul>
                <li><img class="icons-menu-lateral" src="../img/painel.png" />Painel</li>
                <li><img class="icons-menu-lateral" src="../img/administrador.png" />Administradores</li>
                <li><img class="icons-menu-lateral" src="../img/clientes.png" />Clientes</li>
                <li><img class="icons-menu-lateral" src="../img/filmes.png" />Filmes</li>
                <li><img class="icons-menu-lateral" src="../img/filmes.png" />Categoria/Gêneros</li>
                <li><img class="icons-menu-lateral" src="../img/menu.png" />Menu</li>
                <li><img class="icons-menu-lateral" src="../img/filmes.png" />Lançamentos</li>
                <li><img class="icons-menu-lateral" src="../img/newsletter.png" />Newsletter</li>
                <li><img class="icons-menu-lateral" src="../img/banners.png" />Banners</li>
                <li><img class="icons-menu-lateral" src="../img/email.png" />E-mail</li>
            </ul>
        </div>

        <div id="painel-central">
            <div id="separador">Painel</div>
            <div id="estatisticas">

                <div>Filmes cadastrados</div>
                <div>Locados hoje</div>
                <div>Comentários hoje</div>
                <div>Novos usuários cadastrados</div>

            </div>

            <div id="lista-filmes-cadastrados">
                <div id="separador-lista"><img class="icon-lista" src="../img/filmes.png" />Lista de Filmes Cadastrados</div>
            </div>
            <div id="itens">
                <p>nome</p>
                <p>categoria</p>
                <p>preço</p>
                <p>editar</p>
                <p>deletar</p>
            </div>
            <div id="campos">
                <div id="campo1">
                    <div class="iten-cadastrado">filme cadastrado</div>
                </div>
                <div id="campo2">
                    <div class="iten-cadastrado">Tipo do filme</div>
                </div>
                <div id="campo3">
                    <div class="iten-cadastrado">preço </div>
                </div>
                <div id="campo4">
                    <div class="iten-cadastrado">editar</div>
                </div>
            
                <div id="campo5">
                    <div class="iten-cadastrado">deletar</div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
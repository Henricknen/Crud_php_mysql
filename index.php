<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "assets/css/bootstrap.min.css">     <!-- adiçionando css -->
    <title>Crud PHP/MYSQL</title>
</head>
<body>
    <nav class = "navbar navbar-expand-lg bg-body-tertiary">
        <div class = "container-fluid">
          <a class = "navbar-brand" href = "#">Cadastro</a>
          <button class = "navbar-toggler" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navbarNav" aria-controls = "navbarNav" aria-expanded = "false" aria-label = "Toggle navigation">
            <span class = "navbar-toggler-icon"></span>
          </button>
          <div class = "collapse navbar-collapse" id = "navbarNav">
            <ul class = "navbar-nav">
              <li class = "nav-item">
                <a class = "nav-link active" aria-current = "page" href = "index.php">Inicio</a>
              </li>
              <li class = "nav-item">
                <a class = "nav-link" href = "?page=novo">Novo Usuário</a>
              </li>
              <li class = "nav-item">
                <a class = "nav-link" href = "?page=listar">Listar Usuários</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class = "container">
        <div class = "row">
            <div class = "col mt-5">
                <?php
                  include("config.php");    // fazendo a inclusão do arquivo de conexão com banco de dados
                  switch(@$_REQUEST["page"]) {
                  case "novo":
                      include("novo_usuario.php");
                  break;
                  case "listar":
                      include("listar_usuario.php");
                  break;
                  case "salvar":
                      include("salvar_usuario.php");
                  break;
                  case "editar":
                      include("editar_usuario.php");
                  break;
                  default:
                      print "<h1>Crud utilizando</h1>";
                      print "<img src=' assets/img/php_sql_bootstrap.jpg' alt='Descrição da Imagem'>";
        }
            ?>
            </div>
        </div>
      </div>
    
    <script type = "text/javascript" src = "assets/js/jquery-3.7.1.min.js"></script>        <!-- adicionando o jquery -->
    <script type = "text/javascript" src = "assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
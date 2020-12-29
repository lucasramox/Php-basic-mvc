
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="Content/css/bootstrap.min.css">
        <title>Php-basic</title>
    </head>
    
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.php?p=Footer">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php?p=FormCadastro">Cadastrar</a>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index.php?p=FormVizualiza">Listagem</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</br>
      <?php
      $valor = $_GET['p'] ?? 'Footer' ;
      if($valor == 'FormCadastro') { require_once 'Views/FormCadastro.php'; }
      if($valor == 'FormVizualiza') { require_once 'Views/FormVizualiza.php'; }
      if($valor == 'Footer') { require_once 'Views/Footer.php'; }
      ?>
    
    </body>

   
</html>

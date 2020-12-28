<?php
require_once("../Model/User.php");
?>
<?php
$id = $_GET['id'];
$query = $data->byId($_GET['id']);
while($dados = $query->fetch_assoc()){
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../Content/css/bootstrap.min.css">
        <title>Crud</title>
    </head>
    
    <body>
      <div class="container">
      <form method="POST" action="../Controllers/UserController.php?opc=Update">
      <input type="hidden" name="id" value="<?php echo $dados["id"];?>">
    
    <div class="mb-3">
    <label  class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" value="<?= $dados['nome'];?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Idade</label>
    <input type="text" class="form-control" name="idade" id="idade" value="<?= $dados['idade'];?>">
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form></div>
    </body>
</html>
<?php } ?>
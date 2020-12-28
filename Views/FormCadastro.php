<?php
require_once("Model/User.php");
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
    <form method="POST" action="Controllers/UserController.php?opc=Insert">
    <div class="mb-3">
    <label  class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome">
  </div>
  <div class="mb-3">
    <label class="form-label">Idade</label>
    <input type="text" class="form-control" name="idade" id="idade">
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form></div>
    </body>
</html>
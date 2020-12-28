<?php
require_once("Model/User.php");
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="../Content/css/bootstrap.min.css">
        <script  src="../../Jquery/prettify.js"></script>
        <title>Crud</title>
    </head>
    
    <body>
      <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
  <?php 
        $data->listDados($_POST);
  ?>
  </tbody>
</table>
</div>
    </body>
</html>
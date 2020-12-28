<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
require_once("../Model/User.php");

$opc = $_GET['opc'];


switch ($opc) {
    case 'Insert':
        $res = $data->insert($_POST);
        if(!$res)
             echo "Error";
        else
             header('location: ../index.php?p=FormVizualiza');
        break;

     case 'Update':
          $res = $data->update($_POST);
          if(!$res)
          echo "Error";
     else
          header('location: ../index.php?p=FormVizualiza');
          break;

     case 'delete':
          $res = $data->delete($_GET['id']);
          if(!$res)
               echo "Error";
          else
               header('location: ../index.php?p=FormVizualiza');
          break;
    
}

?>
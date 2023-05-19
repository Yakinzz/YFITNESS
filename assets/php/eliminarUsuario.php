<?php
    
    

    include("conexion.php");
    $idUsuario = $_COOKIE["id"];
  $database = conectar();
  $usuario = 'DELETE FROM usuarios WHERE ID_Usuario = '.$idUsuario.'';
  $consultaUsuario = mysqli_query($database,$usuario);
  
  header("Location: ./menu_Usuario.php");

  
  
?>
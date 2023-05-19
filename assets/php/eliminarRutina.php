<?php
    
  include("conexion.php");
  
  session_start();
    $idEjercicio = $_COOKIE["idEjercicio"];
    $idUsuario = $_SESSION["idusuario"];
  $database = conectar();
  $rutina = 'DELETE FROM rutina WHERE ID_Usuario = '.$idUsuario.' AND ID_Ejercicio = '.$idEjercicio.'' ;
  $consultaUsuario = mysqli_query($database,$rutina);

  header("Location: ./menu_Usuario.php");

  
  
?>
<?php
    include("conexion.php");
    session_start();
    $idEjercicio = $_COOKIE["idEjercicio"];
    $idUsuario = $_SESSION["idusuario"];
    echo($idEjercicio);
    echo($idUsuario);
    $database = conectar();
    
    $usuario = 'INSERT INTO rutina (ID_Usuario,ID_Ejercicio) VALUES ("'.$idUsuario.'", "'.$idEjercicio.'")';
    $consultaUsuario = mysqli_query($database,$usuario);

    header("Location: ./menu_Usuario.php");

?>
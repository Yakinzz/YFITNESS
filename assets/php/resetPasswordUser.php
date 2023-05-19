<?php
include("conexion.php");
session_start();
$database = conectar();
$idUsuario = $_COOKIE["id"];

$passHasheada = password_hash("Yfitness@00", PASSWORD_DEFAULT);

$passActualizar = "UPDATE usuarios SET Password='$passHasheada' WHERE ID_Usuario='$idUsuario'";
$actualizarPassUser = mysqli_query($database,$passActualizar);

header("Location:../php/menu_Usuario.php");
                                                     
?>
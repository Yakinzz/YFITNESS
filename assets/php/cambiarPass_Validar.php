<?php
include("conexion.php");


$passActual = $_POST["passActual"];
$passRepetida;

$expresionPass = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}$/";


$valido = false;

session_start(); 
$database = conectar();
$usuario = 'SELECT Username,Password FROM usuarios';
$consultaPass = mysqli_query($database,$usuario);

while($filaDatos = $consultaPass -> fetch_assoc()){
    if($filaDatos["Username"] == $_SESSION["usuario"]){
        
        $passIguales = password_verify($passActual, $filaDatos["Password"]);
        if($passIguales){
            if(isset($_POST["nuevaPass"])){
                if (preg_match($expresionPass,$_POST["nuevaPass"])){
                    $nuevaPass = $_POST["nuevaPass"];
                    if($nuevaPass == $_POST["passRepetida"]){
                        $passRepetida = $_POST["passRepetida"];
                        $passHasheadaBuena = password_hash($passRepetida, PASSWORD_DEFAULT);
                        $valido = true;
                    }
                }
            }
        }
    }
}

$usuario = $_SESSION["usuario"];

if($valido == true){
    $passActualizada = "UPDATE usuarios SET Password='$passHasheadaBuena' WHERE Username='$usuario'";
    $actualizarPass = mysqli_query($database,$passActualizada);
    echo '<h1 style="color: black; padding-bottom:10px;">Contraseña cambiada correctamente! </h1>';
    header('Refresh: 3; URL=./menu_Usuario.php');
}else{
    echo '<h1 style="color: black; padding-bottom:10px;">PROCESO DE CAMBIO DE PASSWORD INCORRECTO! Vuelva a intentarlo</h1>';
    header('Refresh: 5; URL=./menu_Usuario.php');
   
    
}


?>
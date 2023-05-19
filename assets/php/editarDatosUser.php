<?php
include("conexion.php");

$_POST["nombreUsuario"];
$_POST["primerApellido"];
$_POST["segundoApellido"];
$_POST["fechaNacimiento"];
$_POST["emailUsuario"];
$_POST["telefonoUsuario"];
$_POST["generoUsuario"];
$_POST["direccionUsuario"];
$_POST["codigoPostal"];


$nombreUsuario;
$primerApellido;
$segundoApellido;
$fechaNacimiento;
$emailUsuario;
$telefonoUsuario;
$generoUsuario;
$direccionUsuario;
$codigoPostal;


$expresionNombreyapellidos = "/^[a-zA-Z]{2,50}$/";
$expresionFechaNacimiento = "/^(19|20)(((([02468][048])|([13579][26]))-02-29)|(\d{2})-((02-((0[1-9])|1\d|2[0-8]))|((((0[13456789])|1[012]))-((0[1-9])|((1|2)\d)|30))|(((0[13578])|(1[02]))-31)))$/";
$expresionCorreo =  "/^[\w]+@{1}[\w]+.+[a-z]{2,3}$/";
$expresionTelefono = "/0{0,2}([\+]?[\d]{1,3} ?)?([\(]([\d]{2,3})[)] ?)?[0-9][0-9 \-]{6,}( ?([xX]|([eE]xt[\.]?)) ?([\d]{1,5}))?/";
$expresionCP = "/^(?:0[1-9]\d{3}|[1-4]\d{4}|5[0-2]\d{3})$/";


if(isset($_POST["nombreUsuario"])){
    if (preg_match($expresionNombreyapellidos,$_POST["nombreUsuario"])){
        $nombreUsuario = $_POST["nombreUsuario"];
        echo($nombreUsuario);
    }
}else{
    $nombreUsuario = null;
}

//----------------------------------------------------------------------

if(isset($_POST["primerApellido"])){
    if (preg_match($expresionNombreyapellidos,$_POST["primerApellido"])){
        $primerApellido = $_POST["primerApellido"];
        
     }
}else{
    $primerApellido = null;
}

//----------------------------------------------------------------------

if(isset($_POST["segundoApellido"])){
    if (preg_match($expresionNombreyapellidos,$_POST["segundoApellido"])){
        $segundoApellido = $_POST["segundoApellido"];
     }
}else{
    $segundoApellido = null;
}

//----------------------------------------------------------------------

if(isset($_POST["fechaNacimiento"])){
    
    if (preg_match($expresionFechaNacimiento,$_POST["fechaNacimiento"])){
        $fechaNacimiento = $_POST["fechaNacimiento"];
     }
}else{
    $fechaNacimiento = null;
}

//----------------------------------------------------------------------

if(isset($_POST["emailUsuario"])){
    if (preg_match($expresionCorreo,$_POST["emailUsuario"])){
        $emailUsuario = $_POST["emailUsuario"];
     }
}else{
    $emailUsuario = null;
}

//----------------------------------------------------------------------

if(isset($_POST["telefonoUsuario"])){
    if (preg_match($expresionTelefono,$_POST["telefonoUsuario"])){
        $telefonoUsuario = $_POST["telefonoUsuario"];
     }
}else{
    $telefonoUsuario = null;
}

//----------------------------------------------------------------------

if(isset($_POST["generoUsuario"])){
    
    $generoUsuario = $_POST["generoUsuario"];
    
}else{
    $generoUsuario= null;
}

//----------------------------------------------------------------------

if(isset($_POST["direccionUsuario"])){
    
    $direccionUsuario = $_POST["direccionUsuario"];
    
}else{
    $direccionUsuario = null;
}

//----------------------------------------------------------------------

if(isset($_POST["codigoPostal"])){
    if (preg_match($expresionCP,$_POST["codigoPostal"])){
        $codigoPostal = $_POST["codigoPostal"];
     }
    
}else{
    $codigoPostal = null;
}

//----------------------------------------------------------------------



session_start();
$database = conectar();
$idUsuario = $_SESSION["idusuario"];

$usuarioActualizado = "UPDATE usuarios SET Nombre='$nombreUsuario',Primer_Apellido='$primerApellido',Segundo_Apellido='$segundoApellido',Fecha_Nacimiento='$fechaNacimiento',Numero_Telefono='$telefonoUsuario',Genero='$generoUsuario',Direccion='$direccionUsuario',Codigo_Postal='$codigoPostal', Email='$emailUsuario'  WHERE ID_Usuario='$idUsuario'";
$actualizarUsuario = mysqli_query($database,$usuarioActualizado);
    
header("Location:../php/menu_Usuario.php");

?>
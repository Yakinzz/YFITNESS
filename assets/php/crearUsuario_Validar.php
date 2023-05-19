<?php
include("conexion.php");

$_POST["nombreUsuario"];
$_POST["primerApellido"];
$_POST["segundoApellido"];
$_POST["fechaNacimiento"];
$_POST["emailUsuario"];
$_POST["telefonoUsuario"];
$_POST["direccionUsuario"];
$_POST["codigoPostal"];

$nombreUsuario;
$primerApellido;
$segundoApellido;
$fechaNacimiento;
$emailUsuario;
$telefonoUsuario;
$direccionUsuario;
$codigoPostal;
$rolUsuario;
$username;

$expresionNombreyapellidos = "/^[a-zA-Z]{2,50}$/";
$expresionFechaNacimiento = "/^(19|20)(((([02468][048])|([13579][26]))-02-29)|(\d{2})-((02-((0[1-9])|1\d|2[0-8]))|((((0[13456789])|1[012]))-((0[1-9])|((1|2)\d)|30))|(((0[13578])|(1[02]))-31)))$/";
$expresionCorreo = "/^[\w]+@{1}[\w]+.+[a-z]{2,3}$/";
$expresionTelefono = "/0{0,2}([\+]?[\d]{1,3} ?)?([\(]([\d]{2,3})[)] ?)?[0-9][0-9 \-]{6,}( ?([xX]|([eE]xt[\.]?)) ?([\d]{1,5}))?/";
$expresionCP = "/^(?:0[1-9]\d{3}|[1-4]\d{4}|5[0-2]\d{3})$/";

if(isset($_POST["nombreUsuario"])){
    if (preg_match($expresionNombreyapellidos,$_POST["nombreUsuario"])){
        $nombreUsuario = $_POST["nombreUsuario"];
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

if(isset($_POST["rolUsuario"])){
    
    $rolUsuario = $_POST["rolUsuario"];
    
}else{
    $rolUsuario= null;
}

//----------------------------------------------------------------------

if(isset($_POST["username"])){
    
    $username = $_POST["username"];
    
}else{
    $username= null;
}

//----------------------------------------------------------------------

$valido = true;

$database = conectar();
$usuarios = 'SELECT Username FROM usuarios';
$consultaUsuarios = mysqli_query($database,$usuarios);


while($row = $consultaUsuarios->fetch_assoc()){
      
    if($row["Username"] == $_POST["username"]){
        $valido = false;
    }
}

$pass = "YfitnessY@00";
$passHasheada = password_hash($pass, PASSWORD_DEFAULT);
$contador = false;
if($valido == true){
    $llamada = 'INSERT INTO usuarios (Username, Email, Password, Nombre, Primer_Apellido, Segundo_Apellido, Fecha_Nacimiento, Numero_Telefono, Direccion, Codigo_Postal) VALUES ("'.$_POST["username"].'", "'.$emailUsuario.'", "'.$passHasheada.'", "'.$nombreUsuario.'", "'.$primerApellido.'", "'.$segundoApellido.'", "'.$fechaNacimiento.'", "'.$telefonoUsuario.'","'.$direccionUsuario.'", "'.$codigoPostal.'")';
    $consulta = mysqli_query($database,$llamada);

    $contador = true;
    header("Location:./menu_Usuario.php");
}
    if($contador){
        $usuarioss = 'SELECT ID_Usuario,Username FROM usuarios';
        $consultaUsuarioss = mysqli_query($database,$usuarioss);
        
        while($roww = $consultaUsuarioss->fetch_assoc()){
              
            if($roww["Username"] == $_POST["username"]){
                $roles = 'INSERT INTO roles (ID_Usuario,Rol) VALUES ("'.$roww["ID_Usuario"].'", "'.$rolUsuario.'")';
                $consultaroles = mysqli_query($database,$roles);
            }
        } 
    }

  else{
    
    ?>
       <script type="text/javascript">
          
          window.addEventListener("load",ejecutar);
          function ejecutar(){
             
             setTimeout(myFunction, 5000);
             alert("USUARIO YA REGISTRADO CON ESE USERNAME")
          }

          function myFunction(){
             
             window.location.replace("./menu_Usuario.php")
          }
       </script>
    

    <?php
  }
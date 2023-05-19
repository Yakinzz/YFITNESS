<?php
include("conexion.php");



$expresionUsername = "/^(?!.*\.\.)(?!.*\.$)[^\W][\w.]{0,29}$/";
$expresionPass = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}$/";


$contadorCorrecto = 0;

 
 
 if (preg_match($expresionUsername,$_POST["usernameLogin"])){
      
    $contadorCorrecto++;
 }
 if (preg_match($expresionPass,$_POST["passLogin"])){
   
    $contadorCorrecto++;
 }
 

 $datosCorrectos=false;
 session_start();
 

 if($contadorCorrecto == 2){
    
    $database = conectar();
    $usuarios = 'SELECT ID_Usuario,Username,Password FROM usuarios';
    $consultaUsuarios = mysqli_query($database,$usuarios);

    while($filaDatos = $consultaUsuarios -> fetch_assoc()){
      $passwordHash = password_verify($_POST["passLogin"], $filaDatos["Password"]);
      if(($filaDatos["Username"] == $_POST["usernameLogin"]) && ($passwordHash == true)){
        $datosCorrectos=true;
        $_SESSION["idusuario"] = $filaDatos["ID_Usuario"];
      }
    }
    
    if($datosCorrectos == true){
        
        $_SESSION["usuario"] = ($_POST["usernameLogin"]);
        
        header("Location: menu_Usuario.php");

    }else{
       
      ?>
      <script type="text/javascript">
         
         window.addEventListener("load",ejecutar);
         function ejecutar(){
            alert("Nombre de usuario incorrecto")
            myFunction();
         }
    
         function myFunction(){
            
            window.location.replace("./login_registro.php")
         }
      </script>
    
    
    <?php
        
    }
 }else{
  ?>
  <script type="text/javascript">
     
     window.addEventListener("load",ejecutar);
     function ejecutar(){
        alert("Nombre de usuario o Contraseña incorrectos")
        myFunction();
     }

     function myFunction(){
        
        window.location.replace("./login_registro.php")
     }
  </script>


<?php
 }

    
 

    
?>
<?php
include("conexion.php");


$expresionNombreyapellidos = "/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/";
$expresionCorreo = "/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i";
$expresionTelefono = "/0{0,2}([\+]?[\d]{1,3} ?)?([\(]([\d]{2,3})[)] ?)?[0-9][0-9 \-]{6,}( ?([xX]|([eE]xt[\.]?)) ?([\d]{1,5}))?/";
$expresionUsername = "/^(?!.*\.\.)(?!.*\.$)[^\W][\w.]{0,29}$/";
$expresionPass = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}$/";
//$expresionPass = "/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/";

$contadorCorrecto = 0;

if (preg_match($expresionUsername,$_POST["nombreUsuario"])){
   $contadorCorrecto++;
}
if (preg_match($expresionCorreo,$_POST["correo"])){
   $contadorCorrecto++;
}
 
if (preg_match($expresionPass,$_POST["passR"])){
   $contadorCorrecto++;
}
if($_POST["passwordR"] == $_POST["passR"]){
   $contadorCorrecto++;
}

$valido=true;


 if($contadorCorrecto == 4){
    
    $database = conectar();
    $usuarios = 'SELECT ID_Usuario,Username, Email FROM usuarios';
    $consultaUsuarios = mysqli_query($database,$usuarios);
    

    while($row = $consultaUsuarios->fetch_assoc()){
      
      if($row["Username"] == $_POST["nombreUsuario"]){
         $valido = false;
      }
    }
    session_start();
    session_destroy();
    
    if($valido == true){
      $database = conectar();
      $passHasheada = password_hash($_POST["passR"], PASSWORD_DEFAULT);
      $llamada = 'INSERT INTO usuarios (Username, Email, Password) VALUES ("'.$_POST["nombreUsuario"].'", "'.$_POST["correo"].'", "'.$passHasheada.'")';
      $consulta = mysqli_query($database,$llamada);
      
      session_start();
      $_SESSION["usuario"] = $_POST["nombreUsuario"];
      


      header("Location:./menu_Usuario.php");
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
        alert("DATOS INCORRECTOS")
        myFunction();
     }

     function myFunction(){
        
        window.location.replace("./login_registro.php")
     }
  </script>


<?php
 }

    
?>
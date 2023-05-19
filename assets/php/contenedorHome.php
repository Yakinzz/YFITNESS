<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>YF - Contenedor_Home</title>
    <link rel="stylesheet" href="/assets/css/contenedorHome.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  </head>
  <body>

  <?php
        include("conexion.php");

        session_start(); 
        
        $database = conectar();
        $user = 'SELECT ID_Usuario,Username FROM usuarios';
        $consultaUser = mysqli_query($database,$user);
        $ID;
        while($userID = $consultaUser-> fetch_assoc()){
          if($_SESSION["usuario"] == $userID["Username"]){
            $ID = $userID["ID_Usuario"];
          }
        }


        
        $rol = 'SELECT ID_Usuario,Rol FROM roles';
        
        
        $consultaRol = mysqli_query($database,$rol);
        $contador=0;
        while($idRol = $consultaRol -> fetch_assoc()){
          if($ID == $idRol["ID_Usuario"]){
            $contador++;
          }
        }
        if($contador==0){
            $idRol["Rol"]="User";
            $rolCrear = 'INSERT INTO roles (ID_Usuario,Rol) VALUES ("'.$ID.'","'.$idRol["Rol"].'")';
            $consulta = mysqli_query($database,$rolCrear);
        }
          
        
        

    ?>
    <main>
      <div class="big-wrapper light">
        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Hola de nuevo,</h1>
                <h1><?php  echo($_SESSION["usuario"]);?>💪🏽</h1>
              </div>
              <p class="text">
                
              </p>
              <div class="cta" id="btnPerfil">
                <a class="btn" id="enlaceInicio"><i class="ri-play-line"></i></a>
              </div>
            </div>

            <div class="right">
              <img src="/assets/img/a.png" alt="Person Image" class="person" />
            </div>
          </div>
        </div>

      </div>
    </main>
    <script src="/assets/js/contenedorHome.php"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="/assets/img/logo-nav.png" type="image/x-icon">
  <title>YF - TODO EJERCICIOS</title>
  <!---------CSS--------->
  <link rel="stylesheet" href="/assets/css/todoEjercicios.css">

  <!---------ICONS--------->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

  <!---------JQUERY--------->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
  <div class="container">
  <?php
    include("conexion.php");
    session_start();
    $database = conectar();
    $buscar = $_COOKIE["buscar"];
    $ejercicios = "SELECT ID_Ejercicio,Nombre_ejercicio,Descripcion,Grupo,Logo FROM ejercicios WHERE Nombre_Ejercicio LIKE '%".$_COOKIE["buscar"]."%'";
    $consultaEjercicios = mysqli_query($database,$ejercicios);

    while($filaDatos = $consultaEjercicios -> fetch_assoc()){
      $pepe = $filaDatos['ID_Ejercicio'];
  ?>
      
      <div class="image <?php echo $filaDatos["Logo"] ?>">
        <div class="details">
        <h2> 
            <?php 
            $matrizDatos = explode("-",$filaDatos["Nombre_ejercicio"]);
            echo($matrizDatos[0] . " ");
            ?><span><?php echo($matrizDatos[1])?></span>
        </h2>
        <p><?php echo $filaDatos["Descripcion"] ?></p>
        <div class="more">
            <a class="read-more">Añadir a <span>Rutina</span></a>
            <div class="icon-links">
            <?php
                $rutina = 'SELECT ID_Usuario,ID_Ejercicio FROM rutina';
                $consultaRutina = mysqli_query($database,$rutina);
                $rutinaGuardada = false;
                while($filaRutina = $consultaRutina -> fetch_assoc()){

                  if($filaRutina["ID_Usuario"] == $_SESSION["idusuario"] && $filaRutina["ID_Ejercicio"] == $pepe){
                    
                    $rutinaGuardada = true;
                    
                  }
                  
                }

                if($rutinaGuardada == true){
                  ?>
                  <div id="close">
                    <i class="ri-close-circle-line" onclick="return eliminarRutina('<?php print $pepe;?>')"></i>
                  </div>
                <?php
                }else{
                  ?>
                  <div id="check">
                    <i class="ri-check-line" onclick="return crearRutina('<?php print $pepe;?>')"></i>
                    
                  </div>
                <?php
                }
              
              ?>
 
            </div>
        </div>
        </div>
        </div>
    <?php
  }
  
  ?>  
        
    </div>
    <!--image card layout end-->
    <script>
      
      function crearRutina(a){
        document.cookie="idEjercicio=" + a;
        
        document.cookie ='pagina=todoEjercicios.php;';
        location.href ="../php/crearRutina.php";
        
      }

      function eliminarRutina(b){
        
        document.cookie="idEjercicio=" + b;
        
        location.href ="../php/eliminarRutina.php";
      }

      

    </script>
    <script src="https://kit.fontawesome.com/7368c40b21.js" crossorigin="anonymous"></script>
  </body>
</html>
      

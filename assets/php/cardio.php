<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/assets/img/logo-nav.png" type="image/x-icon">
    <title>YF - CARDIO</title>
    <link rel="stylesheet" href="/assets/css/todoEjercicios.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
  <body>
 <!--image card layout start-->
 <div class="container">
  <?php
  include("conexion.php");
  session_start();
  $database = conectar();
  $ejercicios = 'SELECT ID_Ejercicio,Nombre_ejercicio,Descripcion,Grupo,Logo FROM ejercicios WHERE Grupo="CARDIO"';
  $consultaEjercicios = mysqli_query($database,$ejercicios);

  while($filaDatos = $consultaEjercicios -> fetch_assoc()){
    
    ?>
      <!--image card start-->
      <div class="image <?php echo $filaDatos["Logo"] ?>">
          
          <div class="details">
          <h2> <?php 
            $matrizDatos = explode("-",$filaDatos["Nombre_ejercicio"]);
            echo($matrizDatos[0] . " ");
            ?><span><?php echo($matrizDatos[1])?></span></h2>
            <p><?php echo $filaDatos["Descripcion"] ?></p>
            <div class="more">
              <a class="read-more">Ejercicios de <span>CARDIO</span></a>
              <div class="icon-links">
              </div>

            </div>
          </div>
        </div>
        <!--image card end-->
    <?php
  }
  
  ?>  
        
    </div>
    <!--image card layout end-->
      
  
    <script src="https://kit.fontawesome.com/7368c40b21.js" crossorigin="anonymous"></script>
  </body>
</html>

  <!DOCTYPE html>
  
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="/assets/img/logo-nav.png" type="image/x-icon">
      <title>YFITNESS - ADMIN_EDIT</title>
      <!----======== CSS ======== -->
      <link rel="stylesheet" href="/assets/css/perfil.css">
       
      <!----===== Iconscout CSS ===== -->
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  
      <!--<title>Responsive Regisration Form </title>--> 
  </head>
  <body style="background-color: black;">
  
  <?php
    include("conexion.php");
  
    
    
   //$_SESSION["usuario"]
   session_start();
   $idUsuario = $_COOKIE["id"];
    $database = conectar();
    $usuario = 'SELECT ID_Usuario,Username,Email,Password,Nombre,Primer_Apellido,Segundo_Apellido,Fecha_Nacimiento,Numero_Telefono,Genero,Direccion,Codigo_Postal FROM usuarios';
    $consultaEjercicios = mysqli_query($database,$usuario);
  
    $rol = 'SELECT ID_Usuario,Rol FROM roles';
    $consultaRol = mysqli_query($database,$rol);
    
  
      
  
  
    while($filaDatos = $consultaEjercicios -> fetch_assoc()){
      if($filaDatos["ID_Usuario"] == $idUsuario){
  
      
      ?>
        
      <div class="container">
      <h1 style="color: black; padding-bottom:10px;">PANEL DE EDICIÓN DE ADMINISTRADOR</h1>
        <a href="/assets/php/menu_Usuario.php" class="volver"><i class="ri-arrow-go-back-line"></i></a>
          <header>Editando perfil de : <span> 🔹<?php echo($filaDatos["Username"])?> 🔹</span></header>
    
          <form action="/assets/php/editarUsuarioAdmin_Validar.php" method="POST">
              <div class="form first">
                  <div class="details personal">
                      <span class="title">Datos Personales</span>
  
                      <div class="fields">
                          <div class="input-field">
                              <label>Nombre</label>
                              <input type="text" placeholder="Introduce tu nombre" value="<?php 
                              if($filaDatos["Nombre"] != null){
                                  echo($filaDatos["Nombre"]);
                              }
                              ?>" name="nombreUsuario" required>
                          </div>
  
                          <div class="input-field">
                              <label>Primer Apellido</label>
                              <input type="text" placeholder="Introduce tu 1º apellido" value="<?php 
                              if($filaDatos["Primer_Apellido"] != null){
                                  echo($filaDatos["Primer_Apellido"]);
                              }
                              ?>" name="primerApellido">
                          </div>
  
                          <div class="input-field">
                              <label>Segundo Apellido</label>
                              <input type="text" placeholder="Introduce tu 2º apellido" value="<?php 
                              if($filaDatos["Segundo_Apellido"] != null){
                                  echo($filaDatos["Segundo_Apellido"]);
                              }
                              ?>" name="segundoApellido">
                          </div>
  
                          <div class="input-field">
                              <label>Fecha de nacimiento</label>
                              <input type="date" placeholder="" name="fechaNacimiento" value="<?php 
                              if($filaDatos["Fecha_Nacimiento"] != null){
                                  echo($filaDatos["Fecha_Nacimiento"]);
                              }
                              ?>">
                          </div>
  
                          <div class="input-field">
                              <label>Email</label>
                              <input type="text" placeholder="Introduce tu email" value="<?php 
                              if($filaDatos["Email"] != null){
                                  echo($filaDatos["Email"]);
                              }
                              ?>" name="emailUsuario" required>
                          </div>
  
                          <div class="input-field">
                              <label>Número de teléfono</label>
                              <input type="number" placeholder="Introduce tu teléfono" value="<?php 
                              if($filaDatos["Numero_Telefono"] != null){
                                  echo($filaDatos["Numero_Telefono"]);
                              }
                              ?>" name="telefonoUsuario">
                          </div>
  
                          <div class="input-field">
                              <label>Género</label>
                              <select name="generoUsuario">
                              
                                  <option disabled <?php 
                                  if($filaDatos["Genero"] == null){
                                      echo("selected");
                                  }
                                  ?>>Selecciona tú genero</option>
  
                                  <option 
                                  <?php 
                                  if($filaDatos["Genero"] == "Masculino"){
                                      echo("selected");
                                  } 
                                  ?>>Masculino</option>
  
                                  <option <?php 
                                  if($filaDatos["Genero"] == "Femenino"){
                                      echo("selected");
                                  } 
                                  ?>>Femenino</option>
  
                                  <option <?php 
                                  if($filaDatos["Genero"] == "Otros"){
                                      echo("selected");
                                  } 
                                  ?>>Otros</option>
                             
                              </select>
                          </div>
                          <div class="input-field">
                              <label>Dirección</label>
                              <input type="text" placeholder="Introduce tu dirección" name="direccionUsuario" value="<?php 
                              if($filaDatos["Direccion"] != null){
                                  echo($filaDatos["Direccion"]);
                              }
                              ?>">
                          </div>
  
                          <div class="input-field">
                              <label>Código Postal</label>
                              <input type="number" placeholder="Introduce tu códido postal" name="codigoPostal" value="<?php 
                              if($filaDatos["Codigo_Postal"] != null){
                                  echo($filaDatos["Codigo_Postal"]);
                              }
                              ?>">
                          </div>
  
                          
                      </div>
                  </div>
  
                  <div class="details ID">
                      <span class="title">Datos YF</span>
  
                      <div class="fields">
                          <div class="input-field">
                              <label>Rol</label>
                              
                              
                              <?php
                             
                             while($rolUsuario = $consultaRol -> fetch_assoc()){
                                 if($filaDatos["ID_Usuario"] == $rolUsuario["ID_Usuario"]){
                            ?>
                              <select name="rolUsuario" <?php
                             
                                    if($filaDatos["Username"] == $_SESSION["usuario"]){
                                        echo("disabled");
                                    }
                            ?>>
                              
                                  <option disabled <?php 
                                  if($rolUsuario["Rol"] == null){
                                      echo("selected");
                                  }
                                  ?>>Seleccione un rol</option>
  
                                  <option 
                                  <?php 
                                  if($rolUsuario["Rol"] == "Admin"){
                                      echo("selected");
                                  } 
                                  ?>>Admin</option>
  
                                  <option <?php 
                                  if($rolUsuario["Rol"] == "User"){
                                      echo("selected");
                                  } 
                                  ?>>User</option>
  
                              </select>
                            
                              
                            <?php
                                }
                            }
                            ?>
                            
                          </div>
                          <div class="input-field">
                              <label>Username</label>
                              <input type="text" placeholder="Introduce tu Username" name="username" value="<?php 
                              if($filaDatos["Username"] != null){
                                  echo($filaDatos["Username"]);
                              }
                              ?>" disabled>
                          </div>
                          <div class="input-field">
                              <label>Password</label>
                              <input type="password" placeholder="Introduce tu password" name="password" value="<?php 
                              if($filaDatos["Password"] != null){
                                  echo($filaDatos["Password"]);
                              }
                              ?>" disabled>
                          </div>
  
                          
                              
                          </div>
                      </div>
  
                      <button class="submit">
                          <span class="btnText">Actualizar</span>
                          <i class="uil uil-navigator"></i>
                      </button>
      
                      
                  </div> 
                  
              </div>
   
          </form>
      </div>
      <?php
      }
      else{
  
      }
    }
      
      ?>
  
      <script src="/assets/js/perfil.js"></script>
  </body>
  </html>
  
  

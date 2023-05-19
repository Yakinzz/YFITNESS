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
  
 
      <div class="container">
      <h1 style="color: black; padding-bottom:10px;">PANEL DE EDICIÓN DE ADMINISTRADOR</h1>
        <a href="/assets/php/menu_Usuario.php" class="volver"><i class="ri-arrow-go-back-line"></i></a>
          <header>Creación de usuario</header>
    
          <form action="/assets/php/crearUsuario_Validar.php" method="POST">
              <div class="form first">
                  <div class="details personal">
                      <span class="title">Datos Personales</span>
  
                      <div class="fields">
                          <div class="input-field">
                              <label>Nombre</label>
                              <input type="text" placeholder="Introduce el nombre"  name="nombreUsuario" required>
                          </div>
  
                          <div class="input-field">
                              <label>Primer Apellido</label>
                              <input type="text" placeholder="Introduce el 1º apellido" name="primerApellido" required>
                          </div>
  
                          <div class="input-field">
                              <label>Segundo Apellido</label>
                              <input type="text" placeholder="Introduce el 2º apellido" name="segundoApellido">
                          </div>
  
                          <div class="input-field">
                              <label>Fecha de nacimiento</label>
                              <input type="date" placeholder="" name="fechaNacimiento" required>
                          </div>
  
                          <div class="input-field">
                              <label>Email</label>
                              <input type="text" placeholder="Introduce el email" name="emailUsuario" required>
                          </div>
  
                          <div class="input-field">
                              <label>Número de teléfono</label>
                              <input type="number" placeholder="Introduce el teléfono"  name="telefonoUsuario">
                          </div>
  
                          
                          <div class="input-field">
                              <label>Dirección</label>
                              <input type="text" placeholder="Introduce tu dirección" name="direccionUsuario">
                          </div>
  
                          <div class="input-field">
                              <label>Código Postal</label>
                              <input type="number" placeholder="Introduce el código postal" name="codigoPostal">
                          </div>
  
                          
                      </div>
                  </div>
  
                  <div class="details ID">
                      <span class="title">Datos YF</span>
  
                      <div class="fields">
                          <div class="input-field">
                              <label>Rol</label>
                              
                              
                              
                              <select name="rolUsuario">
                              
                                  <option disabled selected require>Seleccione el rol</option>
  
                                  <option>Admin</option>
                                  <option>User</option>
  
                              </select>
                            
                              
                            
                            
                            
                            
                          </div>
                          <div class="input-field">
                              <label>Username</label>
                              <input type="text" placeholder="Introduce tu Username" name="username" required>
                          </div>
                          
                              
                          </div>
                      </div>
  
                      <button class="submit">
                          <span class="btnText">CrearUsuario</span>
                          <i class="uil uil-navigator"></i>
                      </button>
      
                      
                  </div> 
                  
              </div>
   
          </form>
      </div>
      
  
      <script src="/assets/js/perfil.js"></script>
  </body>
  </html>
  
  

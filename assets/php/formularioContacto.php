<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de contacto</title>

  
  <link rel="stylesheet" type="text/css" href="/assets/css/formularioContacto.css">

  
  </head>


<body>  
  
  <!-- formulario de contacto en html y css -->  

  <div class="contact_form">

    <div class="formulario">      
      <h1>Formulario de contacto</h1>
        


          <form action="https://formsubmit.co/yakinzsport@gmail.com" method="post">       

            
                <p>
                  <label for="nombre" class="colocar_nombre">Nombre
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                </p>
              
                <p>
                  <label for="email" class="colocar_email">Email
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email" name="correoUsuario">
                </p>
            
                    
              
                <p>
                  <label for="asunto" class="colocar_asunto">Asunto
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escribe un asunto">
                </p>    
              
                <p>
                  <label for="mensaje" class="colocar_mensaje">Mensaje
                    <span class="obligatorio">*</span>
                  </label>                     
                                    <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                                </p>                    
              
                <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

                <input type="hidden" name="_next" value="http://localhost:3000/assets/php/menu_Usuario.php#">
                <input type="hidden" name="_captcha" value="false">
                

                <p class="aviso">
                  <span class="obligatorio"> * </span>los campos son obligatorios.
                </p>          
            
          </form>
    </div>  
  </div>
            
</body>
</html>


<!-- creado por javiniguez.com, Julio 2019 -->
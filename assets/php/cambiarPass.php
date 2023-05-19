<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="/assets/css/perfil.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--<title>Responsive Regisration Form </title>--> 
</head>
<body>



  
        
    <div class="container">
    <a href="/assets/php/menu_Usuario.php" class="volver"><i class="ri-arrow-go-back-line"></i></a>
        <header>CAMBIO DE CONTRASEÑA</header>
        
        
        <form action="/assets/php/cambiarPass_Validar.php" method="POST">
            
                <div class="details personal">
                    <span class="title"></span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Password Actual</label>
                            <input type="password" placeholder="Introduce tu contraseña" name="passActual" required>
                        </div>

                        <div class="input-field">
                            <label>Nueva Password</label>
                            <input type="password" placeholder="Introduce tu nueva contraseña"  name="nuevaPass" required>
                        </div>

                        <div class="input-field">
                            <label>Repite Nueva Password</label>
                            <input type="password" placeholder="Introduce tu 1º apellido" name="passRepetida" required>
                        </div>

                        

               

                    <button class="submit">
                        <span class="btnText">Cambiar Pass</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
                
            </div>
            
        </form>

        
    </div>

    <script src="/assets/js/perfil.js"></script>
</body>
</html>

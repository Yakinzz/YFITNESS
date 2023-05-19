<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="/assets/img/logo-nav.png" type="image/x-icon">

        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="/assets/css/menu_Usuario.css">

        <!--========== JQUERY ==========-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <title>YFITNESS - APP</title>
    </head>
    <body>

    
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">
                <img src="/assets/img/logo-nav.png" alt="" class="header__img">

                <a class="header__logo"><?php session_start(); echo($_SESSION["usuario"]);
                ?></a>
    
                <div class="header__search div__hide">
                    <input type="search" placeholder="Buscar" class="header__input" id="buscador" onkeyup="buscar()" hidden>
                    <i class='bx bx-search header__icon'></i>
                </div>
                
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a class="nav__link nav__logo">
                        
                        <i class='bx bx-dumbbell nav__icon'></i>
                        
                        <span class="nav__logo-name">YFITNESS</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>
                            <div id="home">
                            <a  class="nav__link active" >
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            </div>
                            
                            
                            
                            
                            <div class="nav__dropdown">
                                <a class="nav__link">
                                    <i class='bx bx-run nav__icon' ></i>
                                    <span class="nav__name">Ejercicios</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <div id="todo">
                                            <a class="nav__dropdown-item nav__link">Todo</a>
                                        </div>
                                        <div id="musculacion">
                                            <a class="nav__dropdown-item nav__link">Musculación</a>
                                        </div>
                                        <div id="cardio">
                                            <a class="nav__dropdown-item nav__link">Cardio</a>
                                        </div>
                                        <div id="estiramientos">
                                            <a class="nav__dropdown-item nav__link">Estiramientos</a>
                                        </div>
                                        <div id="otros">
                                            <a class="nav__dropdown-item nav__link">Otros</a>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div id="rutina">
                            <a class="nav__link">
                                <i class='bx bx-compass nav__icon'></i>
                                <span class="nav__name">Rutina</span>
                            </a>
                            </div>
                            
                            
                        </div>
    
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Usuario</h3>
                            <div id="perfil">
                            <a class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">Perfil</span>
                            </a>
                            </div>
                            
                            <div id="contacto">
                            <a href="#" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">Soporte YF</span>
                            </a>
                            </div>
                            
                            
                            <?php
                                include("conexion.php");
                                
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
                                
                                while($idRol = $consultaRol -> fetch_assoc()){
                                  if($ID == $idRol["ID_Usuario"]){
                                    if($idRol["Rol"]=="Admin"){
                                        ?>
                                        <script>
                                            $(document).ready(function(){
                                                $("#admin").removeClass("div__hide");
                                                $("#btnAdmin").removeClass("div__hide");
                                            });
                                        </script>
                                        <?php
                                    }
                                  }
                                }
                                
                                

                            ?>
                            
                            <div id="btnAdmin" class="div__hide">
                                <a href="#" class="nav__link div__hide" id="admin">
                                    <i class='bx bx-shield-quarter nav__icon' ></i>
                                    <span class="nav__name">Admin</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="/assets/php/cerrarsesion.php" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Cerrar Sesion</span>
                </a>
            </nav>
        </div>

        <!--========== CONTENTS ==========-->
        <div class="contenedorHome">
            

        </div>


        <!--========== MAIN JS ==========-->
        <script src="/assets/js/menu_Usuario.js"></script>
    </body>
</html>
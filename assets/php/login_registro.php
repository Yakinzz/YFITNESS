<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="/assets/img/logo-nav.png" type="image/x-icon">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="/assets/css/login_registro.css">
    
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>YFITNESS - LOGIN</title>
    </head>
    <body>
        <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="/assets/img/img-login.svg" alt="">
                    
                </div>
                
                <div class="login__forms">
                    <form action="/assets/php/login.php" method="POST" class="login__registre" id="login-in">
                        <h1 class="login__title">Inicio Sesión</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Username" class="login__input" name="usernameLogin" required>
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Password" class="login__input" name="passLogin" required>
                        </div>

                        <a href="#" class="login__forgot">Olvidaste la contraseña?</a>

                        <button type="submit" class="login__button">Iniciar Sesion</button>

                        <div>
                            <span class="login__account">Aún no tienes cuenta ?</span>
                            <span class="login__signin" id="sign-up">Registrarse</span>
                        </div>
                    </form>

                    <form action="/assets/php/registro.php" method="POST" class="login__create none" id="login-up">
                        <h1 class="login__title">Crear Cuenta</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Username" class="login__input" name="nombreUsuario" required>
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-at login__icon'></i>
                            <input type="text" placeholder="Email" class="login__input" name="correo" required>
                        </div>

                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Password" class="login__input" name="passR" required>
                        </div>

                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Repeat Password" class="login__input" name="passwordR" required>
                        </div>
                        <button type="submit" class="login__button">REGISTRARSE</button>
                            <!--<a href="/assets/php/login.php" class="login__button">Registrarse</a>-->
                        

                        <div>
                            <span class="login__account">Ya tienes cuenta ?</span>
                            <span class="login__signup" id="sign-in">Iniciar Sesión</span>
                        </div>

                        
                    </form>
                </div>
            </div>
            <div>
                <a href="/index.php" class="login__button" id="volver"><i class='bx bx-left-arrow-alt'></i></a>
            </div>
        </div>

        <!--===== MAIN JS =====-->
        <script src="/assets/js/login_registro.js"></script>
    </body>
</html>
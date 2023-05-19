<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/logo" type="image/x-icon">
    <title>YFITNESS - ADMIN_USERS</title>
    <link rel="stylesheet" href="/assets/css/admin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <table class="content-table">
    
        <thead>
          <tr>
            <th>ID_Usuario</th>
            <th>Username</th>
            <th>Email</th>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Número de teléfono</th>
            <th>Resetear</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <?php
  include("conexion.php");
  session_start(); 
  $database = conectar();
  $usuario = 'SELECT ID_Usuario,Username,Email,Password,Nombre,Primer_Apellido,Segundo_Apellido,Fecha_Nacimiento,Numero_Telefono,Genero,Direccion,Codigo_Postal FROM usuarios';
  $consultaUsuario = mysqli_query($database,$usuario);

  while($filaDatos = $consultaUsuario -> fetch_assoc()){

    ?>
        <tbody>
        <?php if(($filaDatos["Username"] == $_SESSION["usuario"])){ ?>
          <tr class="active-row"  >
            <td> <?php echo($filaDatos["ID_Usuario"]) ?> </td>
            <td> <?php echo($filaDatos["Username"]) ?> </td>
            <td> <?php echo($filaDatos["Email"]) ?> </td>
            <td> <?php echo($filaDatos["Nombre"]) ?> </td>
            <td> <?php echo($filaDatos["Primer_Apellido"]) ?> </td>
            <td> <?php echo($filaDatos["Numero_Telefono"]) ?> </td>
            <td> <button id="btnEditar" class="botonAdmin"><i class='bx bxs-circle' ></i></td>
            <td> <button id="btnEditar" class="botonAdmin"><i class='bx bxs-circle' ></i></td>
            <td> <button id="btnEditar" class="botonAdmin"><i class='bx bxs-circle' ></i></td>
        </tr> 
        <?php }else{ ?>
          <tr>
            <td> <?php echo($filaDatos["ID_Usuario"]) ?> </td>
            <td> <?php echo($filaDatos["Username"]) ?> </td>
            <td> <?php echo($filaDatos["Email"]) ?> </td>
            <td> <?php echo($filaDatos["Nombre"]) ?> </td>
            <td> <?php echo($filaDatos["Primer_Apellido"]) ?> </td>
            <td> <?php echo($filaDatos["Numero_Telefono"]) ?> </td>
            <td> <button id="btnEditar" class="botonAdmin" onclick="reset(<?php echo($filaDatos['ID_Usuario'])?>)"><i class='bx bx-reset'></i> </button>
            <td> <button id="btnEditar" class="botonAdmin" onclick="editar(<?php echo($filaDatos['ID_Usuario'])?>)"><i class='bx bxs-edit'></i> </button>
            <td> <button id="btnEliminar" class="botonAdmin" onclick="eliminar(<?php echo($filaDatos['ID_Usuario'])?>)"><i class='bx bx-x'></i></button></td>
          </tr> 
          <?php } ?>
        </tbody>

    <?php
    
  }
    ?>
    </table>

    <button class="boton" onclick="crearUsuario()">
      <span class="btnText">Crear Nuevo Usuario</span>
      <i class="uil uil-navigator"></i>
    </button>

    <script>
        function eliminar(a){
            document.cookie="id=" + a;
            location.href ="../php/eliminarUsuario.php";
        }
        function editar(b){
            document.cookie="id=" + b;
            location.href ="../php/editarUsuarioAdmin.php";
        }

        function reset(c){
            document.cookie="id=" + c;
            location.href ="../php/resetPasswordUser.php";
        }

        function crearUsuario(){
            location.href ="../php/crearUsuario.php";
        }

    </script>
</body>
</html>
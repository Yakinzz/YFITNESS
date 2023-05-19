<?php

    function conectar() {
        $servername = "localhost";
        $database = "yfitness";
        $username = "yago";
        $password = "123456";

        $conn = mysqli_connect($servername, $username, $password, $database);
        $error = $conn->connect_errno;
        if ($error!=null){
            print "Error $error conectando a la base de datos: $conn->connect_errno";
            return exit();
        }
        else{
            return $conn;
        }
    }

?>
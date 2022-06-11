<?php
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);
    //phpinfo();
    $address = "muebleraradaneza.ddns.net";
    $user = "SitioWeb";
    $password ="sitioweb";
    $database ="db_plaza_radaneza";

    $conn = new mysqli($address, $user, $password, $database);
    if($conn->connect_errno){
        die("Error de conexion");
    }else{
        echo "Conexion exitosa :kappa:";
    }

?>

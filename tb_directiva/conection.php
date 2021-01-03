<?php 

    $host = "localhost";
    $user = "root";
    $contraseña = "";
    $name_db = "bd_tobalon";

    $conexion = mysqli_connect($host, $user, $contraseña, $name_db);

    if (!$conexion) {
        # code...
        ## echo "Conexion a base de datos fallida" . mysqli_connect_error();
    }else{
    ## echo "Conexion a base de datos exitosa";
    }

    mysqli_close($conexion);
?>
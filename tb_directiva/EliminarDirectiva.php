<?php 

    # code...
    $host = "localhost";
    $user = "root";
    $contraseña = "";
    $name_db = "bd_tobalon";

    $conexion = mysqli_connect($host, $user, $contraseña, $name_db);
    $id = $_GET['id'];

    $eliminar = "DELETE FROM tb_directiva WHERE id_directiva='$id'";
    $resultado = mysqli_query($conexion, $eliminar);

    if ($resultado) {
        # code...
        echo "<script>alert('Usuario Eliminado Exitosamente');</script>";
        header("location:ListaDirectiva.php");
    }else{
        echo "El usuario no pudo ser eliminado";
    }


?>
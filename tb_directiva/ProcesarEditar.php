<?php 
    if (isset($_POST['Actualizar'])) {

        $host = "localhost";
        $user = "root";
        $contraseña = "";
        $name_db = "bd_tobalon";
    
        $conexion = mysqli_connect($host, $user, $contraseña, $name_db);

            $idc = $_POST['id'];
            $nombre = $_POST['txtNombre'];
            $apellido = $_POST['txtApellido'];
            $usuario = $_POST['txtUsuario'];
            $clave = $_POST['txtClave'];
            $cargo = $_POST['txtCargo'];

        $actualizar = "UPDATE tb_directiva SET Nombre_d = '$nombre', Apellido_d = '$apellido', Usuario_d='$usuario', Clave_d='$clave', Cargo_d='$cargo' WHERE id_directiva = $idc";
        $resultado = $conexion->query($actualizar);
        if ($resultado) {   
            header("location:ListaDirectiva.php");
        }else {
            echo "usuario no actualizado";
        }
    }
?>
<?php
$conectar=new mysqli('localhost','root','','bd_tobalon');

if (!$conectar) {
    echo"todo bien";
}else{
    
    if (!$base) {
       echo "algo anda mal bro";
        # code...
    }
}
   $Npaja=$_POST['Npaja'];
   $Nombre=$_POST['Nombre'];


   $sql="INSERT INTO tb_asociados VALUES('$Npaja','$Nombre')";


$ejecutar=mysql_query($sql);

if (!$ejecutar) {
    # code...
    echo"error";
}else{
    echo"Guardado correctamente <br><a href= 'tb_asociados.html'>Volver</a>";
}
?>
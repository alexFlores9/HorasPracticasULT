
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="../css/estLoging.css">
</head>
<body>

        <form action="validar.php" method="POST">
        <h2>Login</h2>
  
       <center> <label for="Usuario">Usuario</label></center>
       
        <input type="text" name="Usuario" placeholder="Usuario" required>
        
      
        <center> <label for="Clave">Clave</label></center>
        
        <input type="password" name="Clave" placeholder="Clave" required>
        
        <input type="submit" value="Ingresar">
        </form>
    
        
        
    
</body>
</html>
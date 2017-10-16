<html>
<head>
     <meta charset="UTF-8">
<title>Formulario</title><br>

</head>
<body>
<?php

$conexion=mysqli_connect("localhost","root","","c9") or
    die("Problemas con la conexión");
    
    
    mysqli_query($conexion,"delete from registro") or
  die("Problemas en el select:".mysqli_error($conexion)); //este llamado es para borrar todos los datos ya registrados
echo "Se efectuó el borrado de todos los bovinos registrados."; 
    
    
      mysqli_close($conexion);

?>
</body>
</html>
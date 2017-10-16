<html>
<head>

<meta charset="UTF-8">
<title>Formulario</title><br>

</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","c9") or
    die("Problemas con la conexión");
    
$registros=mysqli_query($conexion, "select ID from registro where ID='$_REQUEST[ID]'")
or die("Problemas en el select:".mysqli_error($conexion));

if ($reg=mysqli_fetch_array($registros)) //se hace el llamado para borrar el id buscado
{
  mysqli_query($conexion,"delete from registro where ID='$_REQUEST[ID]'") or
    die("Problemas en el select:".mysqli_error($conexion));
  echo "Se efectuó el borrado del bovino";
}
else
{
  echo "No existe un Bovino con ese ID.";
}    
    
      mysqli_close($conexion);

?>
</body>
</html>
<html>
<head>
  <meta charset="UTF-8">
<title>Formulario</title><br>

</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","c9") or
    die("Problemas con la conexión");
    
$registros=mysqli_query($conexion,"select Clave,Predio,serie,Al,Productor,Tecnico,Paquetes,Aretado,Siniiga,Arete,Nacimiento,Sexo,Raza,
Especificar,Padre,Madre from registro") or
  die("Problemas en el select:".mysqli_error($conexion)); //se hace el llamado a registros para ver los datos ya ingresados


while ($reg=mysqli_fetch_array($registros))
{
  echo "Clave:".$reg['Clave']."<br>";
  echo "Predio:".$reg['Predio']."<br>";
  echo "serie:".$reg['serie']."<br>";
  echo "Al:".$reg['Al']."<br>";
  echo "Productor:".$reg['Productor']."<br>";
  echo "Tecnico:".$reg['Tecnico']."<br>";
  echo "Paquetes:".$reg['Paquetes']."<br>";
  echo "Aretado:".$reg['Aretado']."<br>";
  echo "Siniiga:".$reg['Siniiga']."<br>";
  echo "Arete:".$reg['Arete']."<br>";
  echo "Nacimiento:".$reg['Nacimiento']."<br>";
  echo "Raza:".$reg['Sexo']."<br>";
  echo "Especificar:".$reg['Especificar']."<br>";
  echo "Padre:".$reg['Padre']."<br>";
  echo "Madre:".$reg['Madre']."<br>";
  
  echo "<br>";
  echo "<hr>";
}

mysqli_close($conexion);

?>
</body>
</html>
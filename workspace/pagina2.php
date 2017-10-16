<html>
<head>
    <meta charset="UTF-8">
<title>Formulario</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","c9") or
    die("Problemas con la conexión"); //se establece conexion con la base de datos

mysqli_query($conexion,"insert into registro(Clave,Predio,serie,Al,Productor,Tecnico,Paquetes,Aretado,Siniiga,Arete,Nacimiento,Sexo,Raza,Especificar,Padre,Madre) values 
       ('$_REQUEST[Clave]','$_REQUEST[Predio]','$_REQUEST[serie]','$_REQUEST[Al]','$_REQUEST[Productor]','$_REQUEST[Tecnico]','$_REQUEST[Paquetes]','$_REQUEST[Aretado]','$_REQUEST[Siniiga]','$_REQUEST[Arete]','$_REQUEST[Nacimiento]','$_REQUEST[Sexo]','$_REQUEST[Raza]','$_REQUEST[Especificar]','$_REQUEST[Padre]','$_REQUEST[Madre]')")
  or die("Problemas en el select".mysqli_error($conexion)); //se hace el registro con la llamada a insert
  

mysqli_close($conexion); //se cierra la conexion

echo "Los datos fueron ingresados.";
?>
</body>
</html>
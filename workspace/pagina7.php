<html>
<head>
    <meta charset="UTF-8">
<title>Formulario</title><br>
</head>
<body>
<?php

$conexion=mysqli_connect("localhost","root","","c9") or
    die("Problemas con la conexión");
    
   $registros=mysqli_query($conexion,"select * from registro
                        where ID='$_REQUEST[ID]'") or
  die("Problemas en el select:".mysqli_error($conexion)); // se hace el llamado al id agregado para buscar el dato a modificar
if ($reg=mysqli_fetch_array($registros))
{
?>

<form action="pagina8.php" method="post"> <!-- los datos se cambiaran y se conectaran con la pagina 8 para terminar el proceso -->
Ingrese los nuevos datos: <br> 
clave: 
<input type="text" name="clavenueva" value="<?php echo $reg['Clave'] ?>"> <!-- este sera el nuevo dato a almacenar -->
<br>
<input type="hidden" name="clavevieja" value="<?php echo $reg['Clave'] ?>"> <!-- este es el dato que ya estaba agregado -->
<br>
predio: 
<input type="text" name="predionueva" value="<?php echo $reg['Predio'] ?>">
<br>
<input type="hidden" name="prediovieja" value="<?php echo $reg['Predio'] ?>">
<br>
serie: 
<input type="text" name="serienueva" value="<?php echo $reg['serie'] ?>">
<br>
<input type="hidden" name="serieevieja" value="<?php echo $reg['serie'] ?>">
<br>
al: 
<input type="text" name="alnueva" value="<?php echo $reg['Al'] ?>">
<br>
<input type="hidden" name="alvieja" value="<?php echo $reg['Al'] ?>">
<br>
productor: 
<input type="text" name="productornueva" value="<?php echo $reg['Productor'] ?>">
<br>
<input type="hidden" name="productorvieja" value="<?php echo $reg['Productor'] ?>">
<br>
tecnico: 
<input type="text" name="tecniconueva" value="<?php echo $reg['Tecnico'] ?>">
<br>
<input type="hidden" name="tecnicovieja" value="<?php echo $reg['Tecnico'] ?>">
<br>
paquetes: 
<input type="text" name="paquetesnueva" value="<?php echo $reg['Paquetes'] ?>">
<br>
<input type="hidden" name="paquetesvieja" value="<?php echo $reg['Paquetes'] ?>">
<br>
aretado:
<input type="date" name="aretadonueva" value="<?php echo $reg['Aretado'] ?>">
<br>
<input type="hidden" name="aretadovieja" value="<?php echo $reg['Aretado'] ?>">
<br>
siniiga: 
<input type="text" name="siniiganueva" value="<?php echo $reg['Siniiga'] ?>">
<br>
<input type="hidden" name="siniigavieja" value="<?php echo $reg['Siniiga'] ?>">
<br>
arete: 
<input type="text" name="aretenueva" value"<?php echo $reg['Arete'] ?>">
<br>
<input type="hidden" name="aretevieja" value="<?php echo $reg['Arete'] ?>">
<br>
fecha nacimiento: 
<input type="date" name="nacimientonueva" value="<?php echo $reg['Nacimiento'] ?>">
<br>
<input type="hidden" name="nacimientovieja" value="<?php echo $reg['Nacimiento'] ?>">
<br>
sexo: 
<input type="text" name="sexonueva" value="<?php echo $reg['Sexo'] ?>">
<br>
<input type="hidden" name="sexovieja" value="<?php echo $reg['Sexo'] ?>">
<br>
raza: 
<input type="text" name="razanueva" value="<?php echo $reg['Raza'] ?>">
<br>
<input type="hidden" name="razavieja" value="<?php echo $reg['Raza'] ?>">
<br>
especificar: 
<input type="text" name="especificarnueva" value="<?php echo $reg['Especificar'] ?>">
<br>
<input type="hidden" name="especificarvieja" value="<?php echo $reg['Especificar'] ?>">
<br>
padre: 
<input type="text" name="padrenueva" value="<?php echo $reg['Padre'] ?>">
<br>
<input type="hidden" name="padrevieja" value="<?php echo $reg['Padre'] ?>">
<br>
madre: 
<input type="text" name="madrenueva" value="<?php echo $reg['Madre'] ?>">
<br>
<input type="hidden" name="madrevieja" value="<?php echo $reg['Madre'] ?>">
<br>


<input type="submit" value="Modificar"> 
</form>

<?php
}
else
  echo "No existe el bovino"; // en un dado caso que la id no se encuentre en la base de datos aparecera este mensaje

    
          mysqli_close($conexion);

?>
</body>
</html>
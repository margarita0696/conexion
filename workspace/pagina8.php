<html>
<head>
    <meta charset="UTF-8">
<title>Formulario</title><br>

</head>
<body>
<?php

$conexion=mysqli_connect("localhost","root","","c9") or
    die("Problemas con la conexión");
    
   mysqli_query($conexion, "update registro 
 set Clave='$_REQUEST[clavenueva]', Predio='$_REQUEST[predionueva]', serie='$_REQUEST[serienueva]',Al='$_REQUEST[alnueva]', Productor='$_REQUEST[productornueva]',
 Tecnico='$_REQUEST[tecniconueva]' ,  Paquetes='$_REQUEST[paquetesnueva]', Aretado='$_REQUEST[aretadonueva]', Siniiga='$_REQUEST[siniiganueva]',
 Arete='$_REQUEST[aretenueva]', Nacimiento='$_REQUEST[nacimientonueva]', Sexo='$_REQUEST[sexonueva]', Raza='$_REQUEST[razanueva]', 
 Especificar='$_REQUEST[especificarnueva]', Padre='$_REQUEST[padrenueva]', Madre='$_REQUEST[madrenueva]'  
 where Clave='$_REQUEST[clavevieja]', Predio='$_REQUEST[prediovieja]', serie='$_REQUEST[serievieja]', Al='$_REQUEST[alvieja]',
 Productor='$_REQUEST[productorvieja]', Tecnico='$_REQUEST[tecnicovieja]', Paquetes='$_REQUEST[paquetesvieja]', Aretado='$_REQUEST[aretadovieja]', 
 Siniiga='$_REQUEST[siniigavieja]', Arete='$_REQUEST[aretevieja]', Nacimiento='$_REQUEST[nacimientovieja]', Sexo='$_REQUEST[sexovieja]', 
 Raza='$_REQUEST[razavieja]', Especificar='$_REQUEST[especificarvieja]', Padre='$_REQUEST[padrevieja]', Madre='$_REQUEST[madrevieja]'") 
 // se llama a update para modificar los datos y se le pone la sintaxis requerida
                        or
  die("Problemas en el select:".mysqli_error($conexion));
  echo "los datos fueron modificados con exito"; //este mensaje aparecera cuando se modifiquen los datos
  
  
 ?>
    
    
</body>
</html>
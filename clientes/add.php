<?php
//print_r($_POST);
require_once("conexion.php");

//print_r($_POST);

$dni= $_POST['dn']; 
$nombre= $_POST['nom']; 

$busqueda= mysql_query("SELECT * FROM clientes 
WHERE 
dni='$dni'
or
nombre='$nombre'
"); 

if(mysql_num_rows($busqueda)>0) 
{ 
      echo "El Cliente ya esta registrado.<br>"; 
	echo "<a href=\"resultados.php?s=$dni\">Regresar</a>";
     // echo "<a href='resultados.php?s=$nombre'>Regresar</a>";

} else { 

      mysql_query("insert into clientes
values
(null,'".$_POST["dn"]."','".$_POST["nom"]."','".$_POST["fnac"]."','".$_POST["dir"]."','".$_POST["ciu"]."','".$_POST["tel"]."','".$_POST["correo"]."')");


echo "<script type=''>
	window.location='resultados.php?s=$dni';
</script>";

} 


?>
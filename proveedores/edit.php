<?php
//print_r($_POST);
require_once("conexion.php");
$sql="update proveedores
set
proveedor='".$_POST["pro"]."',
marcas='".$_POST["mar"]."',
viajante='".$_POST["via"]."',
direccion='".$_POST["dir"]."',
cp='".$_POST["cp"]."',
telefono='".$_POST["tel"]."',
correo='".$_POST["correo"]."'
where
id_proveedor=".$_POST["id_proveedor"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='prove.php';
</script>";
?>

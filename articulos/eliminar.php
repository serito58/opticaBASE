<?php
require_once("conexion.php");
$sql="delete from proveedores
where
id_proveedor=".$_GET["id_proveedor"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";
?>
<?php
require_once("conexion.php");
$sql="delete from facturados
where
id_item=".$_GET["id_item"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='resumen.php';
</script>";
?>
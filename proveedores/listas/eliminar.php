<?php
require_once("conexion.php");
$sql="delete from listas
where
id_lista=".$_GET["id_lista"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='../index.php';
</script>";
?>
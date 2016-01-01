<?php
require_once("conexion.php");
//print_r($_GET);
$sql="delete from viajantes
where
id_viajante=".$_GET["id_viajante"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='../prove.php';
</script>";
?>
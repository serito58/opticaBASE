<?php
print_r($_GET);
require_once("conexion.php");
$sql="delete from recetas
where
id_receta=".$_GET["id_receta"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='./index.php?id_cliente=".$_GET["id_cliente"]."';
</script>";
?>
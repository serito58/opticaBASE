<?php
require_once("conexion.php");
$sql="delete from recetas
where
id_receta=".$_GET["id_receta"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	alert('La receta del Cliente fue eliminada correctamente');
	window.location='index.php';
</script>";
?>
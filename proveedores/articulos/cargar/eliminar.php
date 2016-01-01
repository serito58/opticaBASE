<?php
require_once("conexion.php");
$sql="delete from empleados
where
id_empleado=".$_GET["id_empleado"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	alert('Los datos del empleado fueron eliminados correctamente');
	window.location='index.php';
</script>";
?>
<?php
//print_r($_POST);
require_once("../conexion/conexion.php");
$sql="insert into cristal
values
(null,'".$_POST["nombre"]."','".$_POST["tipo"]."','".$_POST["material"]."','".$_POST["color"]."','".$_POST["tratamiento"]."','".$_POST["costo"]."','".$_POST["publico"]."','".$_POST["proveedor"]."','".$_POST["fecha"]."')";
//echo "$sql";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='agregar.php';
</script>";
?>

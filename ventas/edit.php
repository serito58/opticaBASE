<?php
//print_r($_POST);
require_once("conexion.php");
$sql="update facturados
set
id_item='".$_POST["item"]."',
fecha='".$_POST["fecha"]."',
familia='".$_POST["flia"]."',
cant='".$_POST["cant"]."',
producto='".$_POST["producto"]."',
publico='".$_POST["publico"]."',
proveedor='".$_POST["proveedor"]."'
where
id_item=".$_POST["item"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='resumen.php';
</script>";
?>

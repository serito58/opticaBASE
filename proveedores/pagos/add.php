<?php
//print_r($_POST);
require_once("conexion.php");
$sql="insert into pagos
values
(null,'".$_POST["id_proveedor"]."','".$_POST["fecha"]."','".$_POST["importe"]."')";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='pagos.php?id_proveedor=".$_POST["id_proveedor"]."';
	
</script>";
?>

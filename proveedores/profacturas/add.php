<?php
require_once("conexion.php");
//print_r($_POST);

$sql="insert into facturas
values
(null,'".$_POST["fecha"]."','".$_POST["numfact"]."','".$_POST["importe"]."','".$_POST["fechapago"]."','".$_POST["proveedor"]."',0)";
//echo "$sql";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='agregar.php';
</script>";
?>

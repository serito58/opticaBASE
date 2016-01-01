<?php
//print_r($_POST);
require_once("../conexion/conexion.php");
$sql="insert into ivaventas
values
(null,'".$_POST["fecha"]."','".$_POST["venta"]."')";
//echo "$sql";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";
?>

<?php
//print_r($_POST);
require_once("conexion.php");
$sql="insert into facturas
values
(null,'".$_POST["fec"]."','".$_POST["numfact"]."','".$_POST["imp"]."','".$_POST["fpago"]."','".$_POST["id_pro"]."',0)";

$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php?id_proveedor=".$_POST["id_pro"]."';
	
</script>";
?>

<?php
require_once("conexion.php");
print_r($_GET);

$sql="delete from facturas
where
id_factura=".$_GET["id_factura"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='../prove.php';
</script>";

?>


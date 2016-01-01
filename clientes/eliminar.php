<?php
require_once("conexion.php");
$sql="delete from clientes
where
id_cliente=".$_GET["id_cliente"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";
?>
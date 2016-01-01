<?php
require_once("conexion.php");
$sql="delete from pedidos
where
id_pedido=".$_GET["id_pedido"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";
?>
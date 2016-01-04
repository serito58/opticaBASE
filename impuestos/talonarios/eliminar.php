<?php
require_once("../conexion/conexion.php");
$sql="delete from ivaventas
where
id=".$_GET["id"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";
?>
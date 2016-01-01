<?php
require_once("conexion.php");
$sql="delete from det_lista
where
id_item=".$_GET["id_item"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='history.back();';
</script>";
?>
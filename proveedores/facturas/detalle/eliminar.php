<?php
require_once("conexion.php");
print_r($_GET);

$sql="delete from det_fact
where
id_item=".$_GET["id_item"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='../../prove.php';
</script>";

?>


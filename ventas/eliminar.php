<?php
require_once("conexion.php");
//print_r($_GET);


$sql="delete from factemp
where
id_item=".$_GET["id_item"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";


?>
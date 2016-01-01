<?php
require_once("conexion.php");
$sql="delete from cheques
where
id_cheque=".$_GET["id_cheque"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";
?>
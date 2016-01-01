<?php
//print_r($_POST);
require_once("conexion.php");
$sql="insert into cheques
values
(null,'".$_POST["numero"]."','".$_POST["fecha"]."','".$_POST["importe"]."','','".$_POST["proveedor"]."',0)";
//echo "$sql";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";
?>

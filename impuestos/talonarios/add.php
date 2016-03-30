<?php
//print_r($_POST);
require_once("../../conexion/conexion.php");
$sql="insert into talonarios
values
(null,'".$_POST["numero"]."','".$_POST["fecha"]."','".$_POST["total"]."')";
//echo "$sql";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='agregar.php';
</script>";
?>

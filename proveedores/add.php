<?php
//print_r($_POST);
require_once("conexion.php");
$sql="insert into proveedores
values
(null,'".$_POST["pro"]."','".$_POST["mar"]."','".$_POST["via"]."','".$_POST["dir"]."','".$_POST["cp"]."','".$_POST["tel"]."','".$_POST["correo"]."')";
//echo "$sql";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='prove.php';
</script>";
?>

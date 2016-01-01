<?php
print_r($_POST);
require_once("conexion.php");
$sql="insert into listas
values
(null,'".$_POST["fec"]."','".$_POST["id_pro"]."')";
//echo "$sql";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php?id_proveedor=".$_POST["id_pro"]."';
	
</script>";
?>

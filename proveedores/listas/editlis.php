<?php
//print_r($_POST);
require_once("conexion.php");
$sql="update listas
set
fecha='".$_POST["fecha"]."'
where
id_lista=".$_POST["id_lista"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php?id_proveedor=".$_POST["id_proveedor"]."';
</script>";
?>

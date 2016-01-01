<?php
//print_r($_POST);
require_once("conexion.php");
$sql="insert into recetas
values
(null,'".$_POST["fec"]."','".$_POST["doc"]."','".$_POST["lod"]."','".$_POST["loi"]."','".$_POST["crl"]."','".$_POST["cod"]."','".$_POST["coi"]."','".$_POST["crc"]."','".$_POST["lcod"]."','".$_POST["lcoi"]."','".$_POST["id_clien"]."')";
//echo "$sql";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='./index.php?id_cliente=".$_POST["id_clien"]."';
</script>";
?>

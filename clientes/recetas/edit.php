<?php
//print_r($_POST);
require_once("conexion.php");
$sql="update recetas
set
fecha='".$_POST["fec"]."',
dr='".$_POST["doc"]."',
lod='".$_POST["lod"]."',
loi='".$_POST["loi"]."',
crisl='".$_POST["crl"]."',
cod='".$_POST["cod"]."',
coi='".$_POST["coi"]."',
crisc='".$_POST["crc"]."',
lcod='".$_POST["lcod"]."',
lcoi='".$_POST["lcoi"]."'

where
id_receta=".$_POST["rec"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='./index.php?id_cliente=".$_POST["clien"]."';
</script>";
?>


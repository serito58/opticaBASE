<?php
//print_r($_POST);
require_once("conexion.php");
$sql="update viajantes
set
fecha='".$_POST["fec"]."',
pedido='".$_POST["ped"]."',
fpagado='".$_POST["pag"]."',
importe='".$_POST["imp"]."',
cheques='".$_POST["cheq"]."',
frecibido='".$_POST["rec"]."',
obs='".$_POST["obs"]."'

where
id_viajante=".$_POST["id_via"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php?id_proveedor=".$_POST["id_prov"]."';
</script>";
?>

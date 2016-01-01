<?php
//print_r($_POST);
require_once("conexion.php");
$sql="insert into viajantes
values
(null,'".$_POST["fecha"]."','".$_POST["pedido"]."','".$_POST["pagado"]."','".$_POST["importe"]."','".$_POST["cheques"]."','".$_POST["recibido"]."','".$_POST["obs"]."','".$_POST["id_pro"]."')";
//echo "$sql";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php?id_proveedor=".$_POST["id_pro"]."';
	
</script>";
?>

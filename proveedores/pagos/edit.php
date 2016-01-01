<?php
print_r($_POST);
require_once("conexion.php");
$sql="update pagos
set
fecha='".$_POST["fecha"]."',
importe='".$_POST["importe"]."'


where
id_pago=".$_POST["id_pago"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='pagos.php?id_proveedor=".$_POST["id_proveedor"]."';
</script>";

?>

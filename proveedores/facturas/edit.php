<?php
print_r($_POST);
require_once("conexion.php");
$sql="update facturas
set
fecha='".$_POST["fecha"]."',
numfact='".$_POST["numfact"]."',
importe='".$_POST["importe"]."',
fechapago='".$_POST["pagado"]."'
where
id_factura=".$_POST["id_factura"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php?id_proveedor=".$_POST["id_proveedor"]."';
</script>";

?>

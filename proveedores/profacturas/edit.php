<?php
//print_r($_POST);

require_once("conexion.php");
$sql="update facturas
set
fecha='".$_POST["fecha"]."',
numfact='".$_POST["numfact"]."',
importe='".$_POST["importe"]."',
fechapago='".$_POST["fechapago"]."',
id_pago='".$_POST["idpago"]."',
id_proveedor='".$_POST["id_proveedor"]."'
where
id_factura=".$_POST["id_factura"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";


?>



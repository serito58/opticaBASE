<?php
print_r($_POST);

require_once("conexion.php");

$sql="INSERT INTO det_fact
 VALUES (NULL,
'".$_POST["fam"]."',
'".$_POST["cant"]."' ,
'".$_POST["producto"]."',
'".$_POST["publico"]/$_POST["cost"]."' ,
'".$_POST["fact"]."',
'".$_POST["pro"]."',
'".$_POST["id_item"]."');";


$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='detalle.php?id_factura=".$_POST["fact"]."&id_proveedor=".$_POST["pro"]."';

</script>";

?>


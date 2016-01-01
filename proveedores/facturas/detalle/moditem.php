<?php
require_once("conexion.php");
//print_r($_POST);

$sql="INSERT INTO det_fact
 VALUES (NULL, 
'".$_POST["fam"]."',
'".$_POST["cant"]."' ,
'".$_POST["producto"]."',
'".$_POST["cost"]."',
'".$_POST["publico"]."' ,
'".$_POST["fact"]."', 
'".$_POST["pro"]."');";


$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='detalle.php?id_factura=".$_POST["fact"]."&id_proveedor=".$_POST["pro"]."';

</script>";

?>

<?php
//print_r($_POST);

require_once("conexion.php");

$sql="INSERT INTO `optica`.`det_lista` (`id_item`, `flia`, `producto`, `costo`, `id_lista`, `idproveedor`) VALUES (NULL, '".$_POST["fam"]."', '".$_POST["prod"]."', '".$_POST["cost"]."', '".$_POST["list"]."', '".$_POST["pro"]."');";


$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='detalle.php?id_lista=".$_POST["list"]."&id_proveedor=".$_POST["pro"]."';

</script>";

//print_r($_POST);
?>


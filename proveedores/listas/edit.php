<?php
//print_r($_POST);
require_once("conexion.php");
$sql="update det_lista
set
id_item='".$_POST["id_item"]."',
flia='".$_POST["flia"]."',
producto='".$_POST["producto"]."',
costo='".$_POST["costo"]."',
id_lista='".$_POST["id_list"]."',
idproveedor='".$_POST["id_prov"]."'
where
id_item=".$_POST["id_item"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='detalle.php?id_lista=".$_POST["id_list"]."&id_proveedor=".$_POST["id_prov"]."';
</script>";
?>

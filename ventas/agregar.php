<?php
require_once("conexion.php");
print_r($_GET);


if(isset($_GET["id_item"]))
{
// si se agregó con el boton de agregar hace esto
$sql="SELECT `familia`.`id_familia` , `familia`.`familia` ,
`det_fact` .cant, `det_fact` .producto, `det_fact` .multi, det_fact.id_item,
`proveedores`.`proveedor` , `proveedores`.`id_proveedor`,
 det_lista.costo, det_fact.multi * det_lista.costo as publico,det_fact.id_item
FROM familia,`det_fact`,proveedores,det_lista
where `det_fact`.`flia` = `familia`.`id_familia`
and`det_fact`.`id_proveedor` = `proveedores`.`id_proveedor`
and det_fact.itemlista = det_lista.id_item
and
det_fact.id_item=".$_GET["id_item"]."
";

$res=mysql_query($sql,$con);


while ($reg=mysql_fetch_array($res))
{

$sql="insert into factemp
values
(null,'".$reg["id_item"]."','".$reg["familia"]."','".$reg["cant"]."',null,'".$reg["producto"]."','".$reg["publico"]."','".$reg["proveedor"]."')";
$res=mysql_query($sql,$con); 



}

}else

{
echo "no se pudo ingresar";

}

echo "<script type=''>
	window.location='agregar_cantidad.php?id_item=".$_GET["id_item"]."';
</script>";


?>




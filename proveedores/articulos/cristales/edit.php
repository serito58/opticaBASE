<?php
//print_r($_POST);
require_once("../conexion/conexion.php");
$sql="update cristal
set
nombre='".$_POST["nombre"]."',
tipo='".$_POST["tipo"]."',
material='".$_POST["material"]."',
color='".$_POST["color"]."',
tratamiento='".$_POST["tratamiento"]."',
costo='".$_POST["costo"]."',
publico='".$_POST["publico"]."',
proveedor='".$_POST["proveedor"]."',
fecha='".$_POST["fecha"]."'
where
id_cristal=".$_POST["id_cristal"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='resultadosadm.php?nombre=".$_POST["nombre"]."';
</script>";
mysql_free_result();
mysql_close();
?>

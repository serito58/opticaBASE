<?php
//print_r($_POST);
require_once("conexion.php");
$sql="update pedidos
set
cant='".$_POST["cant"]."',
detalle='".$_POST["detalle"]."',
cliente='".$_POST["cliente"]."',
fpedido='".$_POST["fpedido"]."',
frecibido='".$_POST["frecibido"]."',
laborat='".$_POST["lab"]."',
tipo='".$_POST["tipo"]."',
obs='".$_POST["obs"]."'
where
id_pedido=".$_POST["id_pedido"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";
?>

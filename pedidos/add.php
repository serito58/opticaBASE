<?php
//print_r($_POST);
require_once("conexion.php");
$sql="insert into pedidos
values
(null,'".$_POST["cant"]."','".$_POST["detalle"]."','".$_POST["cliente"]."','".$_POST["fpedido"]."','".$_POST["frecibido"]."','".$_POST["lab"]."','".$_POST["tipo"]."','".$_POST["obs"]."')";
//echo "$sql";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='pendientes/index.php';
</script>";
?>

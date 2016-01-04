<?php
//print_r($_POST);

require_once("../conexion/conexion.php");
$sql="update ivaventas
set
fecha='".$_POST["fecha"]."',
venta='".$_POST["venta"]."'
where
id=".$_POST["id"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";


?>



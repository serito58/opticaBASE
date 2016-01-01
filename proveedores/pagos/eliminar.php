<?php
require_once("conexion.php");
//print_r($_GET);

$sql="delete from pagos
where
id_pago=".$_GET["id_pago"]."";
$res=mysql_query($sql,$con);
echo "<script type=''>
	
</script>";

?>


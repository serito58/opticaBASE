<?php
//print_r($_GET);
//print_r($_POST);
require_once("conexion.php");
$sql="delete from det_fact
where
id_item=".$_GET["id_item"]."";
$res=mysql_query($sql,$con);
mysql_free_result();
mysql_close();
echo "<script type=''>
	window.location='resultadosadm.php';
</script>";

?>

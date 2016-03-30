<?php
//print_r($_GET);
//print_r($_POST);
require_once("../conexion/conexion.php");
$sql="delete from cristal
where
id_cristal=".$_GET["id_cristal"]."";
$res=mysql_query($sql,$con);
mysql_free_result();
mysql_close();
echo "<script type=''>
	window.location='resultadosadm.php';
</script>";

?>

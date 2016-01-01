<?php
//print_r($_POST);
require_once("conexion.php");
$sql="update det_fact
set
cant='".$_POST["cant"]."',
multi=('".$_POST["publico"]."'/'".$_POST["costo"]."')
where
id_item=".$_POST["id_item"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='resultadosadm.php?s=".$_POST["producto"]."';
</script>";
mysql_free_result();
mysql_close();
?>

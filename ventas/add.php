<?php
require_once("conexion.php");
print_r($_POST);
$sql="update factemp
set
vendi='".$_POST["cant"]."'

where
id=".$_POST["ven"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";
?>

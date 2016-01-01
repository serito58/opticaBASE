<?php
//print_r($_POST);
require_once("conexion.php");
$sql="insert into familia
values
(null,'".$_POST["familia"]."')";
//echo "$sql";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";
?>

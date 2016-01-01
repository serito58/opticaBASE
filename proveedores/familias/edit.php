<?php
//print_r($_POST);

require_once("conexion.php");
$sql="update familia
set
familia='".$_POST["flia"]."'
where
id_familia=".$_POST["id"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";


?>



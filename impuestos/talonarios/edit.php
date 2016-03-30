<?php
print_r($_POST);

require_once("../../conexion/conexion.php");
$sql="update talonarios
set
numero='".$_POST["numero"]."',
fecha='".$_POST["fecha"]."',
total='".$_POST["total"]."'
where
id=".$_POST["id"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";


?>



<?php
//print_r($_POST);
require_once("conexion.php");
$sql="update clientes
set
nombre='".$_POST["pro"]."',
dni='".$_POST["via"]."',
fnac='".$_POST["fnac"]."',
direccion='".$_POST["dir"]."',
ciudad='".$_POST["cp"]."',
telefono='".$_POST["tel"]."',
mail='".$_POST["correo"]."'
where
id_cliente=".$_POST["id_cliente"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";
?>

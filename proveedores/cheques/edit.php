<?php
//print_r($_POST);

require_once("conexion.php");
$sql="update cheques
set
num='".$_POST["numero"]."',
fechapago='".$_POST["fecha"]."',
importe='".$_POST["importe"]."',
pagado='".$_POST["pagado"]."',
id_pago='".$_POST["idpago"]."',
id_proveedor='".$_POST["id_proveedor"]."'
where
id_cheque=".$_POST["id"]."";
//echo $sql;
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";


?>



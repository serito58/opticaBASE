<?php
require_once("conexion.php");
//print_r($_GET);

$sql="select count(*) as cuantos from facturas
where
id_pago like '%".$_GET["id_pago"]."%'";



$res=mysql_query($sql,$con);

while ($reg=mysql_fetch_array($res))
{
	//echo $reg["cuantos"];
	if ($reg["cuantos"]>0) {
		
		include("pagohecho.php");
		
	} else {
		
		include("pagonuevo.php");
		
		
	}
	

}
?>

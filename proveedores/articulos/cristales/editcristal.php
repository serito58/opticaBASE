<?php
require_once("../conexion/conexion.php");


$sql="select count(*) as cuantos,
FROM 'cristal'
nombre like '%".$_GET["s"]."%' order by producto asc";
//echo $sql;
$res=mysql_query($sql,$con);
if ($reg=mysql_fetch_array($res))
{
	$total=$reg["cuantos"];
}
$resto=$total % 5;
$ultimo=$total-$resto;

//****************************************************************
if (isset($_GET["pos"]))
{
	$inicio=$_GET["pos"];
}else
{
	$inicio=0;
}
$sql=" UPDATE cristal2
SET nombre = '%".$_GET["nombre2"]."%' where '%".$_GET["nombre"]."%'
and 
SET tipo = '%".$_GET["tipo2"]."%' where '%".$_GET["tipo"]."%'
and
SET material = '%".$_GET["material2"]."%' where '%".$_GET["material"]."%'
and 
SET color = '%".$_GET["color2"]."%' where '%".$_GET["color"]."%'
and
SET tratamiento = '%".$_GET["tratamiento2"]."%' where '%".$_GET["tratamiento"]."%'

limit $inicio,100
";

$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='resultadosadm.php?s=".$_POST["nombre"]."';
</script>";
mysql_free_result();
mysql_close();



?>
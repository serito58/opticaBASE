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
$sql="SELECT *
FROM cristal
where 
nombre like '%".$_GET["nombre"]."%' 
and (tipo like '%".$_GET["tipo"]."%'
and material like '%".$_GET["material"]."%'
and color like '%".$_GET["color"]."%'
and tratamiento like '%".$_GET["tratamiento"]."%')
order by costo asc, publico asc
limit $inicio,100
";
$res=mysql_query($sql,$con);



?>
<html>
<head>
<title>
Listado de Articulos
</title>
<style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
</style>
<script language="javascript" type="text/javascript">
	function eliminar(id)
	{
		if (confirm("Realmente desea eliminar el registro?"))
		{
			window.location="eliminar.php?id_item="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>
</head>
<BODY OnLoad="document.buscador.s.focus();">
<table width="1400" align="center">

<tr>
<td valign="top" align="center" width="1400" colspan="9">
<h3>Listado de Articulos</h3>
</td>
</tr>
<!--ac� va el div menu-->
<div align="center" class="buscador">
<form name="buscador" method="get" action="resultados.php">
 <tr align="left" width="1400" colspan="9">
     <td> <input size="35"  name="nombre" type="text"> </td>
     <td> <input size="15"  name="tipo" type="text"> </td>
     <td> <input size="20" name="material" type="text"> </td>
     <td> <input size="18" name="color" type="text"> </td>
     <td> <input size="16" name="tratamiento" type="text"></td>
     <td valign="top" align="center" width="100">&nbsp;</td>

	 <td>
	 	<a href="javascript:void(0)" title="Buscar" onClick="document.buscador.submit();">
		<img src="../ima/lupa.png" width="24" height="24" border="0">
		</a>
	 </td>

     <td valign="top" align="center" width="700">&nbsp;</td>

</tr>
</form>
</div>
<!--ac� va el div menu-->
<tr class="encabezado">
<td valign="top" align="center" width="250">
Nombre
</td>
<td valign="top" align="center" width="50">
Tipo
</td>
<td valign="top" align="center" width="50">
Material
</td>
<td valign="top" align="center" width="50">
Color
</td>	
<td valign="top" align="center" width="50">
Tratamiento
</td>
<td valign="top" align="center" width="50">
Publico
</td>
<td valign="top" align="center" width="100">
Proveedor
</td>
<td valign="top" align="center" width="50">
Fecha
</td>

</tr>
<?php
//$sql="select * from proveedores order by proveedor asc";
//$res=mysql_query($sql,$con);
$i=0;
while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">


<td valign="top" align="left" width="50">
<?php
echo $reg["nombre"];
?>
</td>
<td valign="top" align="center" width="25">
<?php
echo $reg["tipo"];
?>
</td>
<td valign="top" align="left" width="200">
<?php
echo $reg["material"];
?>
</td>
<td valign="top" align="left" width="200">
<?php
echo $reg["color"];
?>
</td><td valign="top" align="left" width="200">
<?php
echo $reg["tratamiento"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo "$ ",$reg["publico"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["proveedor"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["fecha"];
?>
</td>

</tr>
<?php
}
?>

</table>
</body>
</html>

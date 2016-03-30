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
nombre like '%".$_GET["s"]."%' 
or tipo like '%".$_GET["s"]."%'
or material like '%".$_GET["s"]."%'
or color like '%".$_GET["s"]."%'
or tratamiento like '%".$_GET["s"]."%'
order by publico asc, nombre asc
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
			window.location="eliminar.php?id_cristal="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>
</head>
<BODY OnLoad="document.buscador.s.focus();">
<table width="400" align="center">
<tr>
<td valign="top" align="center" width="400" colspan="3">
<h3>CRISTALES</h3>
</td>
<td>
<a href="agregar.php" title="Agregar Cristales"><img src="../ima/add48x48.png" border="0"></a>
</td>
</tr>
<!--ac� va el div menu-->
<div align="center" class="buscador">
<form name="buscador" method="get" action="resultadosadm.php">
<input type="text" name="s">
<a href="javascript:void(0)" title="Buscar" onClick="document.buscador.submit();">
<img src="../ima/lupa.png" width="24" height="24" border="0">
</a>
</form>
</table>

<table width="1400" align="center">
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
Costo
</td>
<td valign="top" align="center" width="50">
Publico
</td>
<td valign="top" align="center" width="50">
Multi
</td>
<td valign="top" align="center" width="100">
Proveedor
</td>
<td valign="top" align="center" width="50">
Fecha
</td>
<td valign="top" align="center" width="25">&nbsp;
</td>
<td valign="top" align="center" width="25">&nbsp;
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



<td valign="top" align="left" width="250">
<?php
echo $reg["nombre"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo $reg["tipo"];
?>
</td>
<td valign="top" align="left" width="50">
<?php
echo $reg["material"];
?>
</td>
<td valign="top" align="left" width="50">
<?php
echo $reg["color"];
?>
</td><td valign="top" align="left" width="50">
<?php
echo $reg["tratamiento"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo "$ ",$reg["costo"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo "$ ", round($reg["publico"],2);
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo round($reg["publico"]/$reg["costo"],2);
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["proveedor"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo $reg["fecha"];
?>
</td>
<td valign="top" align="center" width="25">
<a href="modificar.php?id_cristal=<?php echo $reg["id_cristal"];?>" title="Modificar"><img src="../ima/editar.png" border="0"></a>
</td>
<td valign="top" align="center" width="25">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id_cristal"];?>')"><img src="../ima/eliminar.png" border="0"></a>
</td>

</tr>
<?php
}
?>

</table>
</body>
</html>

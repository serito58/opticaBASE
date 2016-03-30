<?php
require_once("conexion.php");

$sql="select count(*) as cuantos,*,det_fact.multi * det_lista.costo as publico
FROM familia,`det_fact`,proveedores,det_lista
where `det_fact`.`flia` = `familia`.`id_familia`
and`det_fact`.`id_proveedor` = `proveedores`.`id_proveedor`
and det_fact.itemlista = det_lista.id_item
and(
det_fact.producto like '%".$_GET["s"]."%' 
or proveedor like '%".$_GET["s"]."%'
)
order by producto asc";
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
$sql="SELECT `familia`.`id_familia` , `familia`.`familia` ,
`det_fact` .cant, `det_fact` .producto, `det_fact` .multi, det_fact.id_item as item,
`proveedores`.`proveedor` , `proveedores`.`id_proveedor`, facturas.fecha,
 det_lista.id_item, det_lista.costo, det_fact.multi * det_lista.costo as publico
FROM familia,`det_fact`,proveedores,det_lista, facturas
where `det_fact`.`flia` = `familia`.`id_familia`
and`det_fact`.`id_proveedor` = `proveedores`.`id_proveedor`
and det_fact.itemlista = det_lista.id_item
and det_fact.id_factura=facturas.id_factura
and(
det_fact.producto like '%".$_GET["s"]."%'
or proveedor like '%".$_GET["s"]."%'
)
order by producto asc,fecha desc
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
<table width="1100px" align="center">

<tr>
<td valign="top" align="center" width="100%" colspan="5">
<h3>Listado de Articulos</h3>
</td>



<td valign="top" align="center" width="25">
<input type='button' value="Borrar Ceros">
<a href="./borrarceros.php?producto=<?php echo $reg["producto"];?>"></a>
</td>

</tr>
<!--ac� va el div menu-->
<div align="center" class="buscador">
<form name="buscador" method="get" action="resultadosadm.php">
<input type="text" name="s">
<a href="javascript:void(0)" title="Buscar" onClick="document.buscador.submit();">
<img src="ima/lupa.png" width="24" height="24" border="0">
</a>
</form>
</div>
<!--ac� va el div menu-->
<tr class="encabezado">
<td valign="top" align="center" width="25">
Flia
</td>
<td valign="top" align="center" width="10">
Cant
</td>
<td valign="top" align="center" width="300">
Producto
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
<td valign="top" align="center" width="100">
Fecha
</td>
<td valign="top" align="center" width="25">
</td>
<td valign="top" align="center" width="25">
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



<td valign="top" align="left" width="25">
<?php
echo $reg["id_familia"];?>-<?php
echo $reg["familia"];?>
</td>
<td valign="top" align="center" width="10">
<?php
echo chao_tilde($reg["cant"]);
?>
</td>
<td valign="top" align="left" width="300">
<?php
echo chao_tilde($reg["producto"]);
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo "$ ", round($reg["costo"],2);
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo "$ ", round($reg["publico"]);
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo round(($reg["publico"])/($reg["costo"]),2);
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

<td valign="top" align="center" width="25">
<a href="./modificar.php?id_item=<?php echo $reg["item"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>
</td>

<td valign="top" align="center" width="25">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["item"]?>')"><img src="ima/eliminar.png" border="0"></a>
</td>

<?php
}
?>

</table>

</body>
</html>

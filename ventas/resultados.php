<?php
require_once("conexion.php");

$sql="select count(*) as cuantos,`familia`.`id_familia` , `familia`.`familia` ,
`det_fact` .cant, `det_fact` .producto, `det_fact` .multi, det_fact.id_item,
`proveedores`.`proveedor` , `proveedores`.`id_proveedor`,
 det_lista.costo, det_fact.multi * det_lista.costo as publico
FROM familia,`det_fact`,proveedores,det_lista
where `det_fact`.`flia` = `familia`.`id_familia`
and`det_fact`.`id_proveedor` = `proveedores`.`id_proveedor`
and det_fact.itemlista = det_lista.id_item
and
cant >0
and
det_fact.producto like '%".$_GET["s"]."%' 
";
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
`det_fact` .cant, `det_fact` .producto, `det_fact` .multi, det_fact.id_item,
`proveedores`.`proveedor` , `proveedores`.`id_proveedor`,
 det_lista.costo, det_fact.multi * det_lista.costo as publico
FROM familia,`det_fact`,proveedores,det_lista
where `det_fact`.`flia` = `familia`.`id_familia`
and`det_fact`.`id_proveedor` = `proveedores`.`id_proveedor`
and det_fact.itemlista = det_lista.id_item
and
det_fact.producto like '%".$_GET["s"]."%' 
and 
cant >0 order by producto asc
limit $inicio,100
";
$res=mysql_query($sql,$con);



?>
<html>
<head>
<title>
VENTA de Articulos
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
<table width="80%" align="center">

<center><h3><strong>Descargar Stock</strong></h3></center>

<!--ac� va el div menu-->
<div align="center" class="buscador">
<form name="buscador" method="get" action="resultados.php">
<input type="text" name="s">
<a href="javascript:void(0)" title="Buscar" onClick="document.buscador.submit();">
<img src="ima/lupa.png" width="24" height="24" border="0">
</a>
</form>
</div>

<tr class="encabezado" colspan="6">
<td valign="top" align="center" width="50">
Flia
</td>

<td valign="top" align="center" width="25">
Stock
</td>

<td valign="top" align="center" width="200">
Producto
</td>


<td valign="top" align="center" width="50">
Publico
</td>

<td valign="top" align="center" width="100">
Proveedor
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
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" 
onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" 
onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')" 
onclick="document.location.href='agregar.php?id_item=<?php echo $reg["id_item"];?>'">



<td valign="top" align="left" width="50" >
<?php
echo $reg["id_familia"];?>- <?php echo $reg["familia"];
?>
</td>

<td valign="top" align="center" width="25">
<?php
echo $reg["cant"];
?>
</td>

<td valign="top" align="left" width="200">
<?php
echo $reg["producto"];
?>
</td>



<td valign="top" align="center" width="50">
<?php
echo "$ ", round( $reg["publico"]);
?>
</td>



<td valign="top" align="center" width="100">
<?php
echo $reg["proveedor"];
?>
</td>

<td name="item" valign="top" align="center" width="20">
<a href="agregar.php?id_item=<?php echo $reg["id_item"];?>" title="Agregar"><img src="ima/convertir.png" border="0" title="Agregar"></a>
</td>

</tr>
<?php
}
?>

</table>

<hr>

<div id="select">

<?php
include ("select.php");

?>

</div>

</body>
</html>

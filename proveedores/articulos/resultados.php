<?php
require_once("conexion.php");

$sql="select count(*) as cuantos,`familia`.`id_familia` , `familia`.`familia` ,
`det_fact` .cant, `det_fact` .producto, `det_fact` .multi, 
`proveedores`.`proveedor` , `proveedores`.`id_proveedor`,
 det_lista.costo, det_fact.multi * det_lista.costo as publico
FROM familia,`det_fact`,proveedores,det_lista
where `det_fact`.`flia` = `familia`.`id_familia`
and`det_fact`.`id_proveedor` = `proveedores`.`id_proveedor`
and det_fact.itemlista = det_lista.id_item
and
det_fact.producto like '%".$_GET["s"]."%' order by producto asc";
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
`det_fact` .cant, `det_fact` .producto, `det_fact` .multi, 
`proveedores`.`proveedor` , `proveedores`.`id_proveedor`,
 det_lista.costo, det_fact.multi * det_lista.costo as publico
FROM familia,`det_fact`,proveedores,det_lista
where `det_fact`.`flia` = `familia`.`id_familia`
and`det_fact`.`id_proveedor` = `proveedores`.`id_proveedor`
and det_fact.itemlista = det_lista.id_item
and
det_fact.producto like '%".$_GET["s"]."%' 
order by producto asc
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
<table width="900" align="center">

<tr>
<td valign="top" align="center" width="600" colspan="3">
<h3>Listado de Articulos</h3>
</td>
<td valign="top" align="center" width="300" colspan="2">
<input type="button" value="Borrar Ceros" title="Borrar Ceros" onclick="document.form.submit()" />

</td>
</tr>
<!--ac� va el div menu-->
<div align="center" class="buscador">
<form name="buscador" method="get" action="resultados.php">
<input type="text" name="s">
<a href="javascript:void(0)" title="Buscar" onClick="document.buscador.submit();">
<img src="ima/lupa.png" width="24" height="24" border="0">
</a>
</form>
</div>
<!--ac� va el div menu-->
<tr class="encabezado">
<td valign="top" align="center" width="50">
Flia
</td>

<td valign="top" align="center" width="25">
Cant
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
echo $reg["id_familia"];?>- <?echo $reg["familia"];
?>
</td>

<td valign="top" align="center" width="25">
<?php
echo chao_tilde($reg["cant"]);
?>
</td>

<td valign="top" align="left" width="200">
<?php
echo chao_tilde($reg["producto"]);
?>
</td>



<td valign="top" align="center" width="50">
<?php
echo "$ ", round($reg["publico"],0);
?>
</td>



<td valign="top" align="center" width="100">
<?php
echo $reg["proveedor"];
?>
</td>

<?php
}
?>

</table>
</body>
</html>

<?php
require_once("conexion.php");

$sql="select count(*) as cuantos `familia`.`id_familia`,`familia`.`familia`, `det_fact`.`cant`, `det_fact`.`producto`, `det_fact`.`costo`,det_fact.publico,`proveedores`.`proveedor`
FROM `familia`, `det_fact`, `proveedores`
where familia.id_familia=det_fact.flia
and proveedores.id_proveedor=det_fact.id_proveedor
and
producto like '%".$_GET["s"]."%' ";
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
$sql="select `familia`.`id_familia`,`familia`.`familia`,`det_fact`.`id_item`, `det_fact`.`cant`,publico/costo as multi,
 `det_fact`.`producto`, `det_fact`.`costo`,det_fact.publico,`proveedores`.`proveedor`
FROM `familia`, `det_fact`, `proveedores`
where familia.id_familia=det_fact.flia
and proveedores.id_proveedor=det_fact.id_proveedor
and
producto like '%".$_GET["s"]."%' 
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
<body>
<table width="1100px" align="center">

<tr>
<td valign="top" align="center" width="100%" colspan="7">
<h3>Listado de Articulos</h3>
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
echo $reg["id_familia"];?>- <?echo $reg["familia"];
?>
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
echo "$ ", $reg["publico"];
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


<td valign="top" align="center" width="25">
<a href="../facturas/detalle/modifitem.php?id_item=<?php echo $reg["id_item"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>
</td>

<?php
}
?>

</table>
</body>
</html>

<?php
require_once("conexion.php");
//print_r($_GET);
//print_r($_post);
?>
<html>
<head>
<title>Viajantes</title>
<style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
</style>
<script language="javascript" type="text/javascript">
	function eliminar(id)
	{
		if (confirm("Realmente desea eliminar el registro?"))
		{
			window.location="eliminar.php?id_viajante="+id;
		}
	}
</script>
</head>
<body>

<form>

<?php
$sql="SELECT `proveedores`.`id_proveedor` , `proveedores`.`proveedor`
FROM `proveedores`
where id_proveedor=".$_GET["id_proveedor"]."";
//echo $sql
$res=mysql_query($sql,$con);
//echo $res
$reg=mysql_fetch_array($res);
$prov=$reg["proveedor"];
?>

<table width="1100" align="center">

<tr>
<td valign="top" align="center" width="1100" colspan="9">
<h3>Viajante de</h3><h3 color:red><?php echo $reg["proveedor"];?></h3>
</td>
</tr>

<tr>
<td valign="top" align="right" width="400" colspan="5">
<a href="agregar.php?id_proveedor=<?php echo $_GET["id_proveedor"];?>" title="Agregar visita"><img src="ima/add48x48.png" border="0"></a>
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Volver" title="Volver" onclick="window.location='../resultados.php?s=<?php echo $prov;?>'" />
</td>
</tr>

<tr class="encabezado">
<td valign="top" align="center" width="100">
Fecha
</td>

<td valign="top" align="center" width="300">
Pedido
</td>

<td valign="top" align="center" width="100">
Pagado
</td>

<td valign="top" align="center" width="100">
Importe
</td>

<td valign="top" align="center" width="100">
Cheques
</td>

<td valign="top" align="center" width="100">
Recibido
</td>

<td valign="top" align="center" width="100">
Obs
</td>

<td valign="top" align="center" width="50">
</td>
<td valign="top" align="center" width="50">
</td>
</tr>

<?php

$sql="SELECT * FROM viajantes where id_proveedor =".$_GET["id_proveedor"]." order by id_viajante desc";
//print_r($_GET);


$res=mysql_query($sql,$con);

while ($reg=mysql_fetch_array($res))
{
?>
<tr class="registros">
<td valign="top" align="center" width="100">
<?php
echo $reg["fecha"];
?>
</td>
<td valign="top" align="left" width="300">
<?php
echo $reg["pedido"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["fpagado"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["importe"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["cheques"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["frecibido"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["obs"];
?>
</td>
<td valign="top" align="center" width="25">
<a href="modificar.php?id_viajante=<?php echo $reg["id_viajante"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>
</td>


<td valign="top" align="center" width="25">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id_viajante"];?>')"><img src="ima/eliminar.png" border="0"></a>
</td>

<form name="provee" method="post" action="detalle.php">
<input type="hidden" name="prove" value="<?php echo $reg["id_proveedor"]?>">
<input type="hidden" name="lis" value="<?php echo $reg["id_viajante"]?>">
</form>



</tr>
<?php
}
?>

<tr>
<td valign="top" align="right" width="400" colspan="5">
<a href="agregar.php?id_proveedor=<?php echo $_GET["id_proveedor"];?>" title="Agregar visita"><img src="ima/add48x48.png" border="0"></a>
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Volver" title="Volver" onclick="window.location='../resultados.php?s=<?php echo $prov;?>'" />
</td>
</tr>

</table>



</form>
</body>
</html>

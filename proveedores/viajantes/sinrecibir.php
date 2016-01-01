<?php
require_once("conexion.php");
//print_r($_GET);
//print_r($_post);
?>
<html>
<head>
<title>Pedidos sin recibir</title>
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

<table width="1100" align="center">

<tr>
<td valign="top" align="center" width="1100" colspan="9">
<h3>Pedidos sin recibir</h3>
</td>
</tr>

<tr class="encabezado">
<td valign="top" align="center" width="250">
Proveedor
</td>
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

</tr>

<?php

$sql="SELECT `viajantes` . * , `proveedores`.`proveedor`
FROM `viajantes` , `proveedores`
WHERE viajantes.id_proveedor = proveedores.id_proveedor
and frecibido=''";
//print_r($_GET);


$res=mysql_query($sql,$con);

while ($reg=mysql_fetch_array($res))
{
?>
<tr class="registros">
<td valign="top" align="center" width="250">
<?php
echo $reg["proveedor"];
?>
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
<a href="index.php?id_proveedor=<?php echo $reg["id_proveedor"];?>" title="Ver"><img src="ima/folder.png" border="0"></a>
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
<input type="button" value="Volver" title="Volver" onclick="window.location='../prove.php'" />
</td>
</tr>

</table>



</form>
</body>
</html>

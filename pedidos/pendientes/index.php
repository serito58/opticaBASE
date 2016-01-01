<?php
require_once("conexion.php");
?>
<html>
<head>
<title>
Pedidos
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
			window.location="eliminar.php?id_pedido="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>
</head>
<BODY OnLoad="document.buscador.s.focus();">
<table width="100%" align="center">

<td>
<td valign="top" align="center" width="100%" colspan="8">
<h2>PEDIDOS PENDIENTES</h2>
</td>

<tr>
<td valign="top" align="right" width="400" colspan="5">
<a href="agregar.php" title="Agregar Pedido"><img src="ima/add48x48.png" border="0"></a>
</td>
</tr>


</tr>

<!--..............aca va el div menu-->
<div align="center" class="buscador">
<form name="buscador" method="get" action="resultados.php">
<input type="text" name="s">
<a href="javascript:void(0)" title="Buscar" onClick="document.buscador.submit();">
<img src="ima/lupa.png" width="24" height="24" border="0">
</a>

</form>
</div>
<!--..............aca va el div menu-->


<tr class="encabezado">

<td valign="top" align="center" width="50">
Cant
</td>
<td valign="top" align="center" width="250">
Detalle
</td>
<td valign="top" align="center" width="250">
Cliente
</td>
<td valign="top" align="center" width="50">
F.pedido
</td>
<td valign="top" align="center" width="50">
F.recibido
</td>
<td valign="top" align="center" width="100">
Laborat
</td>
<td valign="top" align="center" width="50">
Tipo
</td>
<td valign="top" align="center" width="100">
Obs
</td>
<td valign="top" align="center" width="25">&nbsp;
</td>
<td valign="top" align="center" width="25">&nbsp;
</td>

</tr>

<?php
$sql="SELECT *
FROM `pedidos`
WHERE frecibido=' 'order by id_pedido desc";
$res=mysql_query($sql,$con);
$i=0;
while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">


<td valign="top" align="left" width="50">
<?php
echo $reg["cant"];
?>
</td>
<td valign="top" align="left" width="250">
<?php
echo $reg["detalle"];
?>
</td>
<td valign="top" align="left" width="250">
<?php
echo chao_tilde($reg["cliente"]);
?>
</td>

<td valign="top" align="left" width="50">
<?php
echo $reg["fpedido"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo $reg["frecibido"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["laborat"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo $reg["tipo"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["obs"];
?>
</td>

<td valign="top" align="center" width="25">
<a href="modificar.php?id_pedido=<?php echo $reg["id_pedido"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>
</td>
<td valign="top" align="center" width="25">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id_pedido"];?>')"><img src="ima/eliminar.png" border="0"></a>
</td>
</tr>
<?php
}
?>
<tr>
<td valign="top" align="center" width="100%" colspan="4">
</td>

<td valign="top" align="left" width="400" colspan="6">
<a href="agregar.php" title="Agregar Pedido"><img src="ima/add48x48.png" border="0"></a>
</td>
</tr>

</table>
</body>
</html>

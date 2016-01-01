<?php
require_once("conexion.php");

?>
<html>
<head>
<title>
Facturas de Proveedores
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
			window.location="eliminar.php?id_proveedor="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>
</head>
<body>
<table width="100%" align="center">

<tr>
<td valign="top" align="center" width="100%" colspan="9">
<h3>Facturas de Proveedores</h3>
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
<td valign="top" align="center" width="150">
Proveedor
</td>
<td valign="top" align="center" width="150">
Viajante
</td>
<td valign="top" align="center" width="150">
Direccion
</td>
<td valign="top" align="center" width="50">
CP
</td>
<td valign="top" align="center" width="150">
Tel&eacute;fono
</td>
<td valign="top" align="center" width="100">
Correo
</td>
<td valign="top" align="center" width="25">&nbsp;

</td>
<td valign="top" align="center" width="25">&nbsp;
</td>

</td>
<td valign="top" align="center" width="15" bgcolor="red">&nbsp;
<strong>Facturas</strong>
</td>


</tr>

<?php
$sql="select * from proveedores order by proveedor asc";
$res=mysql_query($sql,$con);
$i=0;
while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">
<td valign="top" align="left" width="150">
<?php
echo chao_tilde($reg["proveedor"]);
?>
</td>
<td valign="top" align="left" width="150">
<?php
echo chao_tilde($reg["viajante"]);
?>
</td>
<td valign="top" align="left" width="150">
<?php
echo chao_tilde($reg["direccion"]);
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo chao_tilde($reg["cp"]);
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["telefono"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["correo"];
?>
</td>
<td valign="top" align="center" width="25">
<a href="modificar.php?id_proveedor=<?php echo $reg["id_proveedor"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>
</td>
<td valign="top" align="center" width="25">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id_proveedor"];?>')"><img src="ima/eliminar.png" border="0"></a>
</td>
<td valign="top" align="center" width="25">
<a href="listas/index.php?id_proveedor=<?php echo $reg["id_proveedor"];?>" title="Listas"><img src="ima/folder.png" border="0"></a>
</td>
</tr>
<?php
}
?>
<tr>
<td valign="top" align="right" width="400" colspan="5">
<a href="agregar.php" title="Agregar Proveedores"><img src="ima/add48x48.png" border="0"></a>
</td>
</tr>

</table>
</body>
</html>

<?php
require_once("conexion.php");
?>
<html>
<head>
<title>
CLIENTES
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
			window.location="eliminar.php?id_cliente="+id;
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

<tr>
<td valign="top" align="center" width="100%" colspan="8">
<h3>BASE VIEJA</h3>
</td>
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

<td valign="top" align="center" width="150">
Apellido
</td>
<td valign="top" align="center" width="50">
Cumple
</td>
<td valign="top" align="center" width="250">
Direccion
</td>
<td valign="top" align="center" width="100">
Ciudad
</td>
<td valign="top" align="center" width="100">
Tel&eacute;fono
</td>
<td valign="top" align="center" width="25">&nbsp;
</td>
<td valign="top" align="center" width="25">&nbsp;
</td>

</tr>

<?php
$sql="select * from Clientes limit 15";
$res=mysql_query($sql,$con);
$i=0;
while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">

<td valign="top" align="left" width="150">
<?php
echo chao_tilde($reg["Apellido"]);
?>
</td>

<td valign="top" align="center" width="50">
<?php
echo (date(Y)-$reg["Cumple"]);
?>
</td>

<td valign="top" align="left" width="250">
<?php
echo chao_tilde($reg["Direccion"]);
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["Ciudad"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo chao_tilde($reg["Telefono"]);
?>
</td>
<td valign="top" align="center" width="25">
<a href="./recetas/index.php?Id_Cliente=<?php echo $reg["Id_Cliente"];?>" target=recetas title="Recetas"><img src="ima/folder.png" border="0"></a>
</td>

<td valign="top" align="center" width="25">
<a href="./recetas/LC.php?Id_Cliente=<?php echo $reg["Id_Cliente"];?>" target=lc title="LC"><img src="ima/folder.png" border="0"></a>
</td>


</tr>
<?php
}
?>


</table>
</body>
</html>

<?php
require_once("conexion.php");

?>
<tr>
<head>
<title>
Listado de Familias
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
			window.location="eliminar.php?id_familia="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>
</head>
<body>
<table width="300" align="center">

<tr>
<td valign="top" align="center" width="100%" colspan="2">
<h3>Listado de Familias</h3>
</td>
</tr>

<tr class="encabezado">
<td valign="top" align="center" width="25">
id_familia
</td>
<td valign="top" align="center" width="100">
Familia
</td>

</td>
<td valign="top" align="center" width="25">&nbsp;
</td>
</td>


</tr>

<?php
$sql="SELECT * from familia";
$res=mysql_query($sql,$con);
$i=0;
while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">


<td valign="top" align="center" width="50">
<?php
echo $reg["id_familia"];
?>
</td>
<td valign="top" align="center" width="25">
<?php
echo chao_tilde($reg["familia"]);
?>
</td>

<td valign="top" align="center" width="25">
<a href="modificar.php?id_familia=<?php echo $reg["id_familia"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>


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

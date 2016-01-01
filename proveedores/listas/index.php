<?php
require_once("conexion.php");
//print_r($_GET);
//print_r($_post);
?>
<html>
<head>
<title>Listas de precios</title>
<style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
</style>
<script language="javascript" type="text/javascript">
	function eliminar(id)
	{
		if (confirm("Realmente desea eliminar el registro?"))
		{
			window.location="eliminar.php?id_lista="+id;
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

<table width="600" align="center">

<tr>
<td valign="top" align="center" width="600" colspan="6">
<h3>Listas de Precios de</h3><h3 color:red><?php echo $reg["proveedor"];?></h3>
</td>
</tr>

<tr class="encabezado">
<td valign="top" align="center" width="50">
id_lista
</td>
<td valign="top" align="center" width="100">
fecha
</td>



<td valign="top" align="center" width="25">&nbsp;
</td>

<td valign="top" align="center" width="25">&nbsp;
</td>

<td valign="top" align="center" width="25" bgcolor="red">&nbsp;
<strong>VER</strong>
</td>

</tr>

<?php

$sql="SELECT * FROM listas where id_proveedor =".$_GET["id_proveedor"]."";
//print_r($_GET);


$res=mysql_query($sql,$con);

while ($reg=mysql_fetch_array($res))
{
?>
<tr class="registros">
<td valign="top" align="center" width="50">
<?php
echo $reg["id_lista"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["fecha"];
?>


<td valign="top" align="center" width="25">
<a href="modificarlis.php?id_lista=<?php echo $reg["id_lista"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>
</td>


<td valign="top" align="center" width="25">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id_lista"];?>')"><img src="ima/eliminar.png" border="0"></a>
</td>

<form name="provee" method="post" action="detalle.php">
<input type="hidden" name="prove" value="<?php echo $reg["id_proveedor"]?>">
<input type="hidden" name="lis" value="<?php echo $reg["id_lista"]?>">
</form>

<td valign="top" align="center" width="25">
<a href="detalle.php?id_lista=<?php echo $reg["id_lista"];?>&id_proveedor=<?php echo $_GET["id_proveedor"];?>"><img src="ima/folder.png" border="0"></a>
</td>


</tr>
<?php
}
?>

<tr>
<td valign="top" align="right" width="400" colspan="5">

<a href="agregar.php?id_proveedor=<?php echo $_GET["id_proveedor"];?>" title="Agregar Lista"><img src="ima/add48x48.png" border="0"></a>


&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Volver" title="Volver" onclick="window.location='../resultados.php?s=<?php echo $prov;?>'" />
</td>
</tr>

</table>



</form>
</body>
</html>

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
			window.location="eliminar.php?id_factura="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
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

<table width="500" align="center">

<tr>
<td valign="top" align="center" width="500" colspan="6">
<h1>Facturas de</h1><h2 color:red><?php echo $reg["proveedor"];?></h2>
</td>
</tr>

<tr>
<td valign="top" align="right" width="400" colspan="5">
<a href="agregar.php?id_proveedor=<?php echo $_GET["id_proveedor"];?>" title="Agregar Lista"><img src="ima/add48x48.png" border="0"></a>
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Volver" title="Volver" onclick="window.location='../resultados.php?s=<?php echo $prov;?>'" />
</td>
</tr>

<tr class="encabezado">
<td valign="top" align="center" width="50">
id_factura
</td>
<td valign="top" align="center" width="100">
fecha
</td>
<td valign="top" align="center" width="100">
Num Fact
</td>
<td valign="top" align="center" width="100">
Importe
</td>
<td valign="top" align="center" width="100">
FechaPago
</td>
<td valign="top" align="center" width="100">
Id_Pago
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

$sql="SELECT * FROM facturas where id_proveedor =".$_GET["id_proveedor"]." ORDER BY fecha desc";
//print_r($_GET);

$res=mysql_query($sql,$con);
$i=0;
while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">

<td valign="top" align="center" width="20">
<?php
echo $reg["id_factura"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["fecha"];
?>
</td>

<td valign="top" align="center" width="100">
<?php
echo $reg["numfact"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo "$",$reg["importe"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["fechapago"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["id_pago"];
?>
</td>



<td valign="top" align="center" width="25">
<a href="modificar.php?id_factura=<?php echo $reg["id_factura"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>
</td>


<td valign="top" align="center" width="25">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id_factura"];?>')"><img src="ima/eliminar.png" border="0"></a>
</td>

<form name="provee" method="post" action="detalle.php">
<input type="hidden" name="prove" value="<?php echo $reg["id_proveedor"]?>">
<input type="hidden" name="fact" value="<?php echo $reg["id_factura"]?>">
</form>

<td valign="top" align="center" width="25">
<a href="detalle/detalle.php?id_factura=<?php echo $reg["id_factura"];?>&id_proveedor=<?php echo $_GET["id_proveedor"];?>"><img src="ima/folder.png" border="0"></a>
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

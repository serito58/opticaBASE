<?php
require_once("conexion.php");
//print_r($_GET);

?>


<html>
<head>
<title>
Listado de Pagos
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
			windstringow.location="eliminar.php?id_pago="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>
</head>

<BODY >

<?php
$sql="SELECT `proveedores`.`id_proveedor` , `proveedores`.`proveedor`
FROM `proveedores`
where id_proveedor=".$_GET["id_proveedor"]."";

$res=mysql_query($sql,$con);
$reg=mysql_fetch_array($res);

?>

<table width="400" align="center">

<tr>
<td valign="top" align="center" width="600" colspan="6">
<h3>Pagos de <u><?php echo $reg["proveedor"];?></u></h3>
</td>
</tr>
<tr>
<td valign="top" align="right" width="400" colspan="5">
<a href="agregar.php?id_proveedor=<?php echo $_GET["id_proveedor"];?>" title="Agregar Pago"><img src="ima/add48x48.png" border="0"></a>
</td>

<tr class="encabezado">
<td valign="top" align="center" width="100">
Id_pago
</td>
<td valign="top" align="center" width="100">
Fecha
</td>
<td valign="top" align="center" width="150">
Importe
</td>
<td valign="top" align="center" width="20">
</td>
<td valign="top" align="center" width="20">
</td>
<td valign="top" align="center" width="20">
<strong>Facturas</strong>
</td>
<td valign="top" align="center" width="20">
<strong>Cheques</strong>
</td>

</tr>

<?php
$sql="select * from pagos 
where id_proveedor=".$_GET["id_proveedor"]."
order by id_pago desc";
$res=mysql_query($sql,$con);
$i=0;
while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">


<td valign="top" align="center" width="100">
<?php
echo $reg["id_pago"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["fecha"];
?>
</td>
<td valign="top" align="center" width="150">
<?php
echo "$",$reg["importe"];
?>
</td>

<td valign="top" align="center" width="10">
<a href="modificar.php?id_pago=<?php echo $reg["id_pago"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>
</td>
<td valign="top" align="center" width="10">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id_pago"];?>')"><img src="ima/eliminar.png" border="0"></a>
</td>

<td valign="top" align="center" width="10">
<a href="./factu.php?id_pago=<?php echo $reg["id_pago"];?>&id_proveedor=<?php echo $reg["id_proveedor"];?>" target=facturas title="Facturas"><img src="ima/folder.png" border="0"></a>
</td>

<td valign="top" align="center" width="10">
<a href="./cheq.php?id_pago=<?php echo $reg["id_pago"];?>&id_proveedor=<?php echo $reg["id_proveedor"];?>" target=cheques title="Cheques"><img src="ima/folder.png" border="0"></a>
</td>

<form action="modificar.php" name="form" method="post"
<td>
<input type="hidden" name="id_proveedor" value="<?php echo $reg["id_proveedor"];?>">
<input type="hidden" name="id_pago" value="<?php echo $reg["id_pago"];?>">

</td>

</tr>
<?php
}
?>


</table>
</body>
</html>

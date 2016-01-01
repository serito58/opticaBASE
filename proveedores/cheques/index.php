<?php
require_once("conexion.php");

?>
<tr>
<html>
<head>
<title>
CHEQUES
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
			window.location="eliminar.php?id_cheque="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>
</head>



<BODY OnLoad="document.buscador.s.focus();">

<?php
include("saldo.php");
?>

<table width="800" align="center">

<tr>
<td valign="top" align="center" width="100%" colspan="5">
</td>
</tr>

<tr>
<td valign="top" align="right" width="400" colspan="5">
<a href="agregar.php" title="Agregar Proveedores"><img src="ima/add48x48.png" border="0"></a>
</td>
</tr>

<!--ac� va el div buscador-->
<div align="center" class="buscador">
<form name="buscador" method="get" action="resultados.php">
<input type="text" name="s">
<a href="javascript:void(0)" title="Buscar" onClick="document.buscador.submit();">
<img src="ima/lupa.png" width="24" height="24" border="0">
</a>
</form>
</div>
<!--ac� va el div buscador-->

<tr class="encabezado">
<td valign="top" align="center" width="100">
Num
</td>
<td valign="top" align="center" width="200">
Fechapago
</td>
<td valign="top" align="center" width="200">
Importe
</td>
<td valign="top" align="center" width="200">
Pagado
</td>
<td valign="top" align="center" width="200">
Idpago
</td>
<td valign="top" align="center" width="200">
Proveedor
</td>
<td valign="top" align="center" width="25">&nbsp;
</td>
<td valign="top" align="center" width="25">&nbsp;
</td>
</tr>

<?php
$sql="SELECT `cheques` . * , `proveedores`.`proveedor`
FROM `cheques` , `proveedores`
WHERE cheques.id_proveedor = proveedores.id_proveedor  and pagado='' order by fechapago asc";
$res=mysql_query($sql,$con);
$i=0;
while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">


<td valign="top" align="center" width="100">
<?php
echo $reg["num"];
?>
</td>
<td valign="top" align="center" width="200">
<?php
echo $reg["fechapago"];?>
</td>
<td valign="top" align="center" width="200">
<?php
echo "$",$reg["importe"];
?>
</td>
<td valign="top" align="center" width="200">
<?php
echo $reg["pagado"];
?>
</td>
<td valign="top" align="center" width="200">
<?php
echo $reg["id_pago"];
?>
</td>
<td valign="top" align="center" width="200">
<?php
echo $reg["proveedor"];
?>
</td>

<td valign="top" align="center" width="25">
<a href="modificar.php?id_cheque=<?php echo $reg["id_cheque"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>

<td valign="top" align="center" width="25">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id_cheque"];?>')"><img src="ima/eliminar.png" border="0"></a>
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

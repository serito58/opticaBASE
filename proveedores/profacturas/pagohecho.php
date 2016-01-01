<?php
require_once("conexion.php");

//print_r($_GET);

?>

<html>
<head>

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

<?php
$sql="SELECT `proveedores`.`id_proveedor` , `proveedores`.`proveedor`
FROM `proveedores`
where id_proveedor=".$_GET["id_proveedor"]."";
//echo $sql
$res=mysql_query($sql,$con);
$reg=mysql_fetch_array($res);
$prov=$reg["proveedor"];

$sql="SELECT  SUM(importe) as suma
FROM `facturas` , `proveedores`
WHERE facturas.id_proveedor = proveedores.id_proveedor  and id_pago=".$_GET["id_pago"]."";

$resul=mysql_query($sql,$con);
$regis=mysql_fetch_array($resul);


?>

<table width="400" align="center">

<tr>
<td valign="top" align="center" width="600" colspan="6">
<h3>(<u>Pago N&ordm; <?echo $_GET["id_pago"];?></u>) - Facturas Pagadas de <u><?php echo $reg["proveedor"]," - $", $regis["suma"];?></h3>


</td>
</tr>
</table>



<form action="pagofacturas.php" method="post" name="form">

<table width="600" align="center">

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
F Pago
</td>
<td valign="top" align="center" width="100">
Id_pago
</td>


</tr>

<?php

$sql="SELECT `facturas` . * ,`proveedores`.`proveedor`
FROM `facturas` , `proveedores`
WHERE facturas.id_proveedor = proveedores.id_proveedor  and id_pago=".$_GET["id_pago"]." order by fecha asc";

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
<td valign="top" align="center" width="10">
<?php echo $reg["id_pago"];?>
</td>

<input type="hidden" name="id_factura" value="<?php echo $reg["id_factura"];?>" />

</tr>
<?php
}
?>



</table>

</form>

<?php
require_once("conexion.php");
$sql="select * from facturas where id_factura=".$_GET["id_factura"]."";
$res=mysql_query($sql,$con);
?>
<html>
<head>
<title>Modificar Factura</title>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>

<body onLoad="limpiar()">
<?php
if ($reg=mysql_fetch_array($res))
{
?>
<form action="edit.php" method="post" name="form">
<table align="center" width="400">
<tr>
<td valign="top" align="center" width="400" colspan="2">
<h3>Modificar Factura</h3>
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Fecha
</td>
<td valign="top" align="left" width="200">
<input type="text" name="fecha" value="<?php echo $reg["fecha"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Numfact
</td>
<td valign="top" align="left" width="200">
<input type="text" name="numfact" value="<?php echo $reg["numfact"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Importe
</td>
<td valign="top" align="left" width="200">
<input type="text" name="importe" value="<?php echo $reg["importe"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Fechapago
</td>
<td valign="top" align="left" width="200">
<input type="text" name="fechapago" value="<?php echo $reg["fechapago"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Idpago
</td>
<td valign="top" align="left" width="200">
<input type="text" name="idpago" value="<?php echo $reg["id_pago"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Proveedor
</td>
<td valign="top" align="left" width="200">
<input type="text" name="id_proveedor" value="<?php echo $reg["id_proveedor"];?>" />
</td>
</tr>

<input type="hidden" name="id_factura" value="<?php echo $reg["id_factura"];?>" />

<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Volver" title="Volver" onClick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Modificar" title="Modificar" onClick="document.form.submit()" />
</td>
</tr>

</table>
</form>
<?php
}
?>
</body>
</html>

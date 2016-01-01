<?php
require_once("conexion.php");
//print_r($_GET);
$sql="select * from facturas where id_factura=".$_GET["id_factura"]."";
$res=mysql_query($sql,$con);
?>
<html>
<head>
<title>Modificar Item</title>
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
<h3>Modificar Item</h3>
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
Pagado
</td>
<td valign="top" align="left" width="200">
<input type="text" name="pagado" value="<?php echo $reg["fechapago"];?>" />
</td>
</tr>


<tr>
<td valign="top" align="center" width="400" colspan="2">

<input type="hidden" name="id_factura" value="<?php echo $reg["id_factura"];?>">
<input type="hidden" name="id_proveedor" value="<?php echo $reg["id_proveedor"];?>">


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

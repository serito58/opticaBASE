<?php
require_once("../conexion/conexion.php");
$sql="select * from ivaventas where id=".$_GET["id"]."";
$res=mysql_query($sql,$con);
?>
<html>
<head>
<title>Modificar Ventas</title>
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
<h3>Modificar Venta</h3>
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
Venta
</td>
<td valign="top" align="left" width="200">
<input type="text" name="venta" value="<?php echo $reg["venta"];?>" />
</td>
</tr>

<input type="hidden" name="id" value="<?php echo $reg["id"];?>" />

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

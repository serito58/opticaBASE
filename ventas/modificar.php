<?php
require_once("conexion.php");
$sql="select * from facturados where id_item=".$_GET["id_item"]."";
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
Id_item
</td>
<td valign="top" align="left" width="200">
<input type="text" name="item" value="<?php echo $reg["id_item"];?>" />
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
Familia
</td>
<td valign="top" align="left" width="200">
<input type="text" name="flia" value="<?php echo $reg["familia"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Cant
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cant" value="<?php echo $reg["cant"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Producto
</td>
<td valign="top" align="left" width="200">
<input type="text" name="producto" value="<?php echo $reg["producto"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Publico
</td>
<td valign="top" align="left" width="200">
<input type="text" name="publico" value="<?php echo $reg["publico"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Proveedor
</td>
<td valign="top" align="left" width="200">
<input type="text" name="proveedor" value="<?php echo $reg["proveedor"];?>" />
</td>
</tr>

<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="hidden" name="id_item" value="<?php echo $_GET["id_item"];?>">
<input type="button" value="Volver" title="Volver" onClick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="submit" value="Modificar" title="Modificar" />
</td>
</tr>

</table>
</form>
<?php
}
?>
</body>
</html>

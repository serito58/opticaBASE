<?php
require_once("conexion.php");
$sql="select * from proveedores where id_proveedor=".$_GET["id_proveedor"]."";
$res=mysql_query($sql,$con);
?>
<html>
<head>
<title>Modificar Proveedor</title>
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
<h3>Modificar datos del Proveedor</h3>
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Proveedor
</td>
<td valign="top" align="left" width="200">
<input type="text" name="pro" value="<?php echo $reg["proveedor"];?>" />
</td>
</tr>
<tr>
<td align="right" valign="top" width="200">
Marcas
</td>
<td valign="top" align="left" width="200">
<input type="text" name="mar" value="<?php echo $reg["marcas"];?>" />
</td>
</tr>
<tr>
<td align="right" valign="top" width="200">
Viajante
</td>
<td valign="top" align="left" width="200">
<input type="text" name="via" value="<?php echo $reg["viajante"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Direccion
</td>
<td valign="top" align="left" width="200">
<input type="text" name="dir" value="<?php echo $reg["direccion"];?>" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
CP
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cp" value="<?php echo $reg["cp"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Tel&eacute;fono
</td>
<td valign="top" align="left" width="200">
<input type="text" name="tel" value="<?php echo $reg["telefono"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
E-Mail
</td>
<td valign="top" align="left" width="200">
<input type="text" name="correo" value="<?php echo $reg["correo"];?>" />
</td>
</tr>

<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="hidden" name="id_proveedor" value="<?php echo $_GET["id_proveedor"];?>">
<input type="button" value="Volver" title="Volver" onClick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Modificar" title="Modificar" onClick="validar()" />
</td>
</tr>

</table>
</form>
<?php
}
?>
</body>
</html>

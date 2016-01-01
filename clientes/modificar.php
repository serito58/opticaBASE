<?php
require_once("conexion.php");
$sql="select * from clientes where id_cliente=".$_GET["id_cliente"]."";
$res=mysql_query($sql,$con);
?>
<html>
<head>
<title>Modificar Cliente</title>
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
<h3>Modificar datos del Cliente</h3>
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Nombre
</td>
<td valign="top" align="left" width="200">
<input type="text" name="pro" value="<?php echo $reg["nombre"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
DNI
</td>
<td valign="top" align="left" width="200">
<input type="text" name="via" value="<?php echo $reg["dni"];?>" />
</td>
</tr>
<tr>
<td align="right" valign="top" width="200">
Fnac
</td>
<td valign="top" align="left" width="200">
<input type="text" name="fnac" value="<?php echo $reg["fnac"];?>" />
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
Ciudad
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cp" value="<?php echo $reg["ciudad"];?>" />
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
<input type="text" name="correo" value="<?php echo $reg["mail"];?>" />
</td>
</tr>

<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="hidden" name="id_cliente" value="<?php echo $_GET["id_cliente"];?>">
<input type="button" value="Volver" title="Volver" onClick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Modificar" title="Modificar" onClick="document.form.submit()"/>
</td>
</tr>

</table>
</form>
<?php
}
?>
</body>
</html>

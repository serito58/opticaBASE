<html>
<head>
<title>Agregar Proveedor</title>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>

<body onLoad="limpiar()">
<form action="add.php" method="post" name="form">
<table align="center" width="400">
<tr>
<td valign="top" align="center" width="400" colspan="2">
<h3>Agregar Proveedor</h3>
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Proveedor
</td>
<td valign="top" align="left" width="200">
<input type="text" name="pro" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Marcas
</td>
<td valign="top" align="left" width="200">
<input type="text" name="mar" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Viajante
</td>
<td valign="top" align="left" width="200">
<input type="text" name="via" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Direccion
</td>
<td valign="top" align="left" width="200">
<input type="text" name="dir" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
CP
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cp" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Tel&eacute;fono
</td>
<td valign="top" align="left" width="200">
<input type="text" name="tel" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
E-Mail
</td>
<td valign="top" align="left" width="200">
<input type="text" name="correo" />
</td>
</tr>

<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Ingresar Proveedor" title="Ingresar Proveedor" onclick="validar()" />
</td>
</tr>

</table>
</form>
</body>
</html>

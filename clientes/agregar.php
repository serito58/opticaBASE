<html>
<head>
<title>Agregar Cliente</title>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>

<body onLoad="limpiar()">
<form action="add.php" method="post" name="form">
<table align="center" width="400">
<tr>
<td valign="top" align="center" width="400" colspan="2">
<h3>Agregar Cliente</h3>
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
DNI
</td>
<td valign="top" align="left" width="200">
<input type="text" name="dn" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Nombre
</td>
<td valign="top" align="left" width="200">
<input type="text" name="nom" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Fnac
</td>
<td valign="top" align="left" width="200">
<input type="text" name="fnac" />
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
Ciudad
</td>
<td valign="top" align="left" width="200">
<input type="text" name="ciu" />
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
<input type="button" value="Ingresar Cliente" title="Ingresar Cliente" onclick="validar2()" />
</td>
</tr>

</table>
</form>
</body>
</html>

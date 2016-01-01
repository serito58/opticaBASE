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
<h3>Agregar Familia</h3>
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Familia
</td>
<td valign="top" align="left" width="200">
<input type="text" name="familia" />
</td>
</tr>

<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Ingresar Familia" title="Ingresar Familia" onclick="form.submit();" />
</td>
</tr>

</table>
</form>
</body>
</html>

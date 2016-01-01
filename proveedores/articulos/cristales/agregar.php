<html>
<head>
<title>Agregar Cristales</title>
<script language="javascript" type="text/javascript" src="../js/funciones.js"></script>
</head>

<body onLoad="limpiar()">
<form action="add.php" method="post" name="form">
<table align="center" width="400">
<tr>
<td valign="top" align="center" width="400" colspan="2">
<h3>Agregar Cristales</h3>
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Nombre
</td>
<td valign="top" align="left" width="200">
<input type="text" name="nombre" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Tipo
</td>
<td valign="top" align="left" width="200">
<input type="text" name="tipo" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Material
</td>
<td valign="top" align="left" width="200">
<input type="text" name="material" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Color
</td>
<td valign="top" align="left" width="200">
<input type="text" name="color" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Tratamiento
</td>
<td valign="top" align="left" width="200">
<input type="text" name="tratamiento" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Costo
</td>
<td valign="top" align="left" width="200">
<input type="text" name="costo" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Publico
</td>
<td valign="top" align="left" width="200">
<input type="text" name="publico" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Proveedor
</td>
<td valign="top" align="left" width="200">
<input type="text" name="proveedor" />
</td>
</tr>

<input type="hidden" name="fecha" value="<?php
echo date("Y-m-d");
?>
" />

<tr>
<td valign="top" align="center" width="600" colspan="2">
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Ingresar Cristales" title="Ingresar Cristales" onclick="document.form.submit()" />
</td>
</tr>

</table>
</form>
</body>
</html>

<html>
<?php
require_once ("../conexion/conexion.php");
//print_r($_GET);
//print_r($_POST);
?>

<head>
<title>Agregar Venta</title>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>

<body OnLoad="document.form.fecha.focus();" >
<form action="add.php" method="post" name="form">
<table align="center" width="150">
<tr>
<td valign="top" align="center" width="150" colspan="2">
<h3>Agregar Venta</h3>
</td>
</tr>


<tr>
<td align="right" valign="top" width="100">
Fecha
</td>
<td valign="top" align="left" width="50">
<input type="text" name="fecha" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="100">
Venta
</td>
<td valign="top" align="left" width="50">
<input type="text" name="venta" />
</td>
</tr>

<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Ingresar Venta" title="Ingresar Venta" onclick="form.submit();" />
</td>
</tr>

</table>
</form>
</body>
</html>

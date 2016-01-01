<?php
print_r($_get);
?>

<html>
<head>
<title>Agregar Visita</title>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>

<body onLoad="limpiar()">
<form action="add.php" method="post" name="form">
<table align="center" width="400">
<tr>
<td valign="top" align="center" width="400" colspan="2">
<h3>Agregar Visita</h3>
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Fecha.
</td>
<td valign="top" align="left" width="200">
<input type="text" name="fecha" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Pedido.
</td>
<td valign="top" align="left" width="200">
<input type="text" name="pedido" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Pagado.
</td>
<td valign="top" align="left" width="200">
<input type="text" name="pagado" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Importe.
</td>
<td valign="top" align="left" width="200">
<input type="text" name="importe" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Cheques.
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cheques" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Recibido.
</td>
<td valign="top" align="left" width="200">
<input type="text" name="recibido" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Obs.
</td>
<td valign="top" align="left" width="200">
<input type="text" name="obs" />
</td>
</tr>

<input type="hidden" name="id_pro" value="<?=$_GET["id_proveedor"]?>" />

</tr>



<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Ingresar Visita" title="Ingresar Visita" onclick="document.form.submit()" />
</td>
</tr>

</table>
</form>
</body>
</html>

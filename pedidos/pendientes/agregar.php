
<html>
<head>
<title>Agregar Pedido</title>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>

<body onLoad="limpiar()">
<form action="add.php" method="post" name="form">
<table align="center" width="400">
<tr>
<td valign="top" align="center" width="400" colspan="2">
<h2>Agregar Pedido</h2>
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Cant
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cant" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Detalle
</td>
<td valign="top" align="left" width="200">
<input type="text" name="detalle" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Cliente
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cliente" />
</td>
</tr>



<input type="hidden" name="fpedido" value="<?php
echo date("d-m-Y");
?>
" />



<input type="hidden" name="frecibido" value="" />


<tr>
<td align="right" valign="top" width="200">
Laborat
</td>
<td valign="top" align="left" width="200">
<input type="text" name="lab" />
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
Obs
</td>
<td valign="top" align="left" width="200">
<input type="text" name="obs" />
</td>
</tr>

<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Ingresar Pedido" title="Ingresar Pedido" onclick="document.form.submit()" />
</td>
</tr>

</table>
</form>
</body>
</html>

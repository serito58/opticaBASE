<?php
//print_r($_GET);

?>

<html>
<head>

<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>

<body onLoad="limpiar(); document.form.fecha.focus();" >

<form action="./add.php" method="post" name="form">
<table align="center" width="400">
<tr>
<td valign="top" align="center" width="400" colspan="2">
<h3>Agregar Pago</h3>
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
Importe
</td>
<td valign="top" align="left" width="200">
<input type="text" name="importe" />
</td>
</tr>



<input type="hidden" name="id_proveedor" value="<?=$_GET["id_proveedor"]?>" />

</tr>



<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Ingresar Pago" title="Ingresar Pago" onclick="document.form.submit()" />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
</td>
</tr>

</table>
</form>
</body>
</html>

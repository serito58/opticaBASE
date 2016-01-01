<html>
<?php
//print_r($_GET);
//print_r($_POST);

?>

<head>
<title>Agregar Item</title>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>

<body onLoad="limpiar()">
<form action="addotro.php" method="post" name="form">
<table align="center" width="400">
<tr>
<td valign="top" align="center" width="400" colspan="2">
<h3>Agregar Item</h3>
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Familia.
</td>
<td valign="top" align="left" width="200">
<input type="text" name="fam" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Producto.
</td>
<td valign="top" align="left" width="200">
<input type="text" name="prod" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Costo.
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cost" />
</td>
</tr>

<tr>
<td>
<input type="hidden" name="list" value="<?php echo $_GET["id_lista"];?>" />
<input type="hidden" name="pro" value="<?php echo $_GET["id_proveedor"];?>" />
</td>
</tr>



<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Ingresar Lista" title="Ingresar Item" onclick="document.form.submit()" />
</td>
</tr>

</table>
</form>
</body>
</html>

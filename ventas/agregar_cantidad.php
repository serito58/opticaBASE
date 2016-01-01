<?
require_once("conexion.php");
//print_r($_GET);

?>

<html>
<head>
<title>Agregar Cantidad</title>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>


<BODY OnLoad="document.form.cant.focus();">



<form action="add.php" method="post" name="form">
<table align="center" width="400">

<tr>
<td valign="top" align="center" width="400" colspan="2">
<h2>Agregar Cantidad</h2>
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Cantidad?
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cant" onkeypress="if (event.keyCode == 13) document.forms[0].submit()" />
</td>
</tr>


<input type="hidden" name="ven" value="<?php echo $_GET["id_item"];?>"/>

<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Ingresar Cantidad" title="Ingresar Cantidad" onclick="document.form.submit()" />


</td>
</tr>

</table>
</form>
</body>
</html>

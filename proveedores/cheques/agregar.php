<html>
<?php
require_once ("conexion.php");
//print_r($_GET);
//print_r($_POST);

?>

<head>
<title>Agregar Cheque</title>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>

<body OnLoad="document.form.numero.focus();" >
<form action="add.php" method="post" name="form">
<table align="center" width="400">
<tr>
<td valign="top" align="center" width="400" colspan="2">
<h3>Agregar Cheque</h3>
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Numero
</td>
<td valign="top" align="left" width="200">
<input type="text" name="numero" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
FechaPago
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


<tr>
<td align="right" valign="top" width="200">
Proveedor
</td>
<td valign="top" align="left" width="200">
<?php
$consulta="SELECT *
FROM proveedores order by proveedor asc";
$result=mysql_query($consulta);
?>
<select name="proveedor">
<option value="">Seleccionar</option>
<?php
while($fila=mysql_fetch_row($result)){
echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
}
?>
</select>
</td>
</tr>



<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Ingresar Cheque" title="Ingresar Cheque" onclick="form.submit();" />
</td>
</tr>

</table>
</form>
</body>
</html>

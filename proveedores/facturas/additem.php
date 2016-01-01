<html>
<?php
require_once ("conexion.php");
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
Familia
</td>
<td valign="top" align="left" width="200">
<?php
$consulta="SELECT *
FROM familia";
$result=mysql_query($consulta);
?>
<select name="fam">
<option value="">Seleccionar</option>
<?php
while($fila=mysql_fetch_row($result)){
echo "<option value='".$fila['0']."'>".$fila['1']."</option>";
}
?>
</select>
</td>
</tr>>



<tr>
<td align="right" valign="top" width="200">
Cant.
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cant" />
</td>
</tr>



<tr>
<td align="right" valign="top" width="200">
Producto
</td>
<td valign="top" align="left" width="200">
<?php
$consulta="SELECT id_item, producto
FROM `det_lista`
WHERE idproveedor =".$_GET["id_proveedor"]." order by producto asc";
$result=mysql_query($consulta);
?>
<select name="producto">
<option value="">Seleccionar</option>
<?php
while($fila=mysql_fetch_row($result)){
echo "<option value='".$fila['1']."'>".$fila['1']."</option>";
}
?>
</select>
</td>
</tr>>


<tr>
<td align="right" valign="top" width="200">
Costo.
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cost" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Publico.
</td>
<td valign="top" align="left" width="200">
<input type="text" name="publico" />
</td>
</tr>


<tr>
<td>
<input type="hidden" name="fact" value="<?php echo $_GET["id_factura"];?>" />
<input type="hidden" name="pro" value="<?php echo $_GET["id_proveedor"];?>" />
</td>
</tr>



<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Ingresar Item" title="Ingresar Item" onclick="document.form.submit()" />
</td>
</tr>

</table>
</form>
</body>
</html>

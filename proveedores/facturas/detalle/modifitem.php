<?php
require_once("conexion.php");
//print_r($_GET);
$sql="select * from det_fact where id_item=".$_GET["id_item"]."";
$res=mysql_query($sql,$con);
?>
<html>
<head>
<title>Modificar Item</title>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>

<body onLoad="limpiar()">
<?php
if ($reg=mysql_fetch_array($res))
{
?>
<form action="moditem.php" method="post" name="form">
<table align="center" width="400">
<tr>
<td valign="top" align="center" width="400" colspan="2">
<h3>Modificar Item</h3>
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Familia
</td>
<td valign="top" align="left" width="200">
<input type="text" name="fam" value="<?php echo $reg["flia"];?>" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Cant
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cant" value="<?php echo $reg["cant"];?>" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Producto
</td>
<td valign="top" align="left" width="200">
<input type="text" name="producto" value="<?php echo $reg["producto"];?>" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Costo
</td>
<td valign="top" align="left" width="200">
<input type="text" name="costo" value="<?php echo $reg["costo"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Publico
</td>
<td valign="top" align="left" width="200">
<input type="text" name="publico" value="<?php echo $reg["publico"];?>" />
</td>
</tr>


<tr>
<td>
<input type="hidden" name="id_item" value="<?php echo $reg["id_item"];?>"/>
<input type="hidden" name="fact" value="<?php echo $reg["id_factura"];?>" />
<input type="hidden" name="pro" value="<?php echo $reg["id_proveedor"];?>" />
</td>
</tr>



<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Modificar Item" title="Modificar Item" onclick="document.form.submit()" />
</td>
</tr>

</table>
</form>
<?php
}
?>
</body>
</html>

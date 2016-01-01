<?php
//print_r($_GET);
require_once("conexion.php");
$sql="SELECT 
`familia`.`id_familia` , `familia`.`familia` ,
`det_fact` .cant, `det_fact` .producto, `det_fact`.multi, det_fact.itemlista,det_fact.id_item,
`proveedores`.`proveedor` , `proveedores`.`id_proveedor`,
 det_lista.costo, det_fact.multi * det_lista.costo as publico
FROM familia,`det_fact`,proveedores,det_lista
where `det_fact`.`flia` = `familia`.`id_familia`
and`det_fact`.`id_proveedor` = `proveedores`.`id_proveedor`
and det_fact.itemlista = det_lista.id_item
and det_fact.id_item=".$_GET["id_item"]."";
$res=mysql_query($sql,$con);
?>
<html>
<head>
<title>Modificar Articulo</title>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>

<body onLoad="limpiar()">
<?php
if ($reg=mysql_fetch_array($res))
{
?>
<form action="edit.php" method="post" name="form">
<table align="center" width="400">
<tr>
<td valign="top" align="center" width="400" colspan="2">
<h3>Modificar Articulo</h3>
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
<input type="text" name="producto" readonly="yes" value="<?php echo $reg["producto"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Costo
</td>
<td valign="top" align="left" width="200">
<input type="text" name="costo" readonly="yes" value="<?php echo $reg["costo"];?>" />
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
<td valign="top" align="center" width="400" colspan="2">
<input type="hidden" name="id_item" value="<?php echo $_GET["id_item"];?>">
<input type="button" value="Volver" title="Volver" onClick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="submit" value="Modificar" title="Modificar" />
</td>
</tr>

</table>
</form>
<?php
}
?>
</body>
</html>

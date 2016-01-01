<?php
require_once("conexion.php");
$sql="select * from pedidos where id_pedido=".$_GET["id_pedido"]."";
$res=mysql_query($sql,$con);
?>
<html>
<head>
<title>Modificar Cliente</title>
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
<h2>Modificar Pedido</h2>
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
Detalle
</td>
<td valign="top" align="left" width="200">
<input type="text" name="detalle" value="<?php echo $reg["detalle"];?>" />
</td>
</tr>
<tr>
<td align="right" valign="top" width="200">
Cliente
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cliente" value="<?php echo $reg["cliente"];?>" />
</td>
</tr>


<input type="hidden" name="fpedido" value="<?php echo $reg["fpedido"];?>" />


<tr>
<td align="right" valign="top" width="200">
F. recibido
</td>
<td valign="top" align="left" width="200">
<input type="text" name="frecibido" value="<?php echo $reg["frecibido"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Laborat
</td>
<td valign="top" align="left" width="200">
<input type="text" name="lab" value="<?php echo $reg["laborat"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Tipo
</td>
<td valign="top" align="left" width="200">
<input type="text" name="tipo" value="<?php echo $reg["tipo"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Obs
</td>
<td valign="top" align="left" width="200">
<input type="text" name="obs" value="<?php echo $reg["obs"];?>" />
</td>
</tr>


<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="hidden" name="id_pedido" value="<?php echo $_GET["id_pedido"];?>">
<input type="button" value="Volver" title="Volver" onClick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Modificar" title="Modificar" onClick="document.form.submit()"/>
</td>
</tr>

</table>
</form>
<?php
}
?>
</body>
</html>

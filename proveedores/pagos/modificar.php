<?php
require_once("conexion.php");
$sql="select * from pagos where id_pago=".$_GET["id_pago"]."";
$res=mysql_query($sql,$con);
//print_r($_GET);
?>
<html>
<head>
<title>Modificar Pago</title>
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
<h3>Modificar Pago</h3>
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Fecha
</td>
<td valign="top" align="left" width="200">
<input type="text" name="fecha" value="<?php echo $reg["fecha"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Importe 
</td>
<td valign="top" align="left" width="200">
<input type="text" name="importe" value="<?php echo $reg["importe"];?>" />
</td>
</tr>


<tr>
<td valign="top" align="center" width="400" colspan="2">

<input type="hidden" name="id_pago" value="<?php echo $reg["id_pago"];?>">
<input type="hidden" name="id_proveedor" value="<?php echo $reg["id_proveedor"];?>">


<input type="button" value="Volver" title="Volver" onClick="history.back();" />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="Modificar" title="Modificar" onClick="document.form.submit()" />
</td>
</tr>

</table>
</form>
<?php
}
?>
</body>
</html>

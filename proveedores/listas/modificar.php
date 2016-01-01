<?php
require_once("conexion.php");
$sql="select * from det_lista where id_item=".$_GET["id_item"]."";
$res=mysql_query($sql,$con);
//print_r($sql);
?>
<html>
<head>
<title>Modificar Lista</title>
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
<h3>Modificar Lista</h3>
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Flia
</td>
<td valign="top" align="left" width="200">
<input type="text" name="flia" value="<?php echo $reg["flia"];?>" />
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
<td valign="top" align="center" width="400" colspan="2">
<input type="hidden" name="id_item" value="<?php echo $reg["id_item"];?>">

<input type="hidden" name="id_list" value="<?php echo $reg["id_lista"];?>">

<input type="hidden" name="id_prov" value="<?php echo $reg["idproveedor"];?>">


<input type="button" value="Volver" title="Volver" onClick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
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

<?php
require_once("conexion.php");
$sql="select * from viajantes where id_viajante=".$_GET["id_viajante"]."";
$res=mysql_query($sql,$con);
//print_r($sql);
?>
<html>
<head>
<title>Modificar Visita</title>
<style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
</style>

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
<td valign="top" align="center" width="400" colspan="9">
<h3>Modificar Visita</h3>
</td>
</tr>

<tr>
<td valign="top" align="center" width="100">
Fecha
</td>

<td valign="top" align="center" width="300">
Pedido
</td>

<td valign="top" align="center" width="100">
Pagado
</td>

<td valign="top" align="center" width="100">
Importe
</td>

<td valign="top" align="center" width="100">
Cheques
</td>

<td valign="top" align="center" width="100">
Recibido
</td>

<td valign="top" align="center" width="100">
Obs
</td>
</tr>


<tr>

<td valign="top" align="left" width="100">
<input type="text" name="fec" value="<?php echo $reg["fecha"];?>" />
</td>

<td valign="top" align="left" width="300">
<input type="text" name="ped" value="<?php echo $reg["pedido"];?>" />
</td>

<td valign="top" align="left" width="100">
<input type="text" name="pag" value="<?php echo $reg["fpagado"];?>" />
</td>

<td valign="top" align="left" width="100">
<input type="text" name="imp" value="<?php echo $reg["importe"];?>" />
</td>

<td valign="top" align="left" width="100">
<input type="text" name="cheq" value="<?php echo $reg["cheques"];?>" />
</td>

<td valign="top" align="left" width="100">
<input type="text" name="rec" value="<?php echo $reg["frecibido"];?>" />
</td>

<td valign="top" align="left" width="100">
<input type="text" name="obs" value="<?php echo $reg["obs"];?>" />
</td>
</tr>

<tr>
<td valign="top" align="center" width="400" colspan="9">

<input type="hidden" name="id_via" value="<?php echo $reg["id_viajante"];?>">

<input type="hidden" name="id_prov" value="<?php echo $reg["id_proveedor"];?>">


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

<?php
require_once("conexion.php");
$sql="select * from listas where id_lista=".$_GET["id_lista"]."";
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
<form action="editlis.php" method="post" name="form">
<table align="center" width="400">
<tr>
<td valign="top" align="center" width="400" colspan="2">
<h3>Modificar Lista</h3>
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
<td valign="top" align="center" width="400" colspan="2">

<input type="hidden" name="id_lista" value="<?php echo $reg["id_lista"];?>">

<input type="hidden" name="id_proveedor" value="<?php echo $reg["id_proveedor"];?>">


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

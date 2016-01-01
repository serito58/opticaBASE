<?php
require_once("conexion.php");
$sql="select * from familia where id_familia=".$_GET["id_familia"]."";
$res=mysql_query($sql,$con);
?>
<html>
<head>
<title>Modificar Familia</title>
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
<h3>Modificar Familia</h3>
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Id_familia
</td>
<td valign="top" align="left" width="200">
<input type="text" name="id" value="<?php echo $reg["id_familia"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Familia
</td>
<td valign="top" align="left" width="200">
<input type="text" name="flia" value="<?php echo $reg["familia"];?>" />
</td>
</tr>


<tr>
<td valign="top" align="center" width="400" colspan="2">
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

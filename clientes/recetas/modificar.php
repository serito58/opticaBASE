<?php
//print_r($_POST);
require_once("conexion.php");
$sql="select * from recetas where id_receta=".$_GET["id_receta"]."";
$res=mysql_query($sql,$con);
//print_r($_GET);
?>
<html>
<head>
<title>Modificar Receta</title>
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
<h3>Modificar Receta</h3>
</td>
</tr>


<input type="hidden" name="rec" value="<?php echo $reg["id_receta"];?>" />

<tr>
<td align="right" valign="top" width="500">
Fecha
</td>
<td valign="top" align="left" width="500">
<input type="text" name="fec" value="<?php echo $reg["fecha"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="500">
Dr.
</td>
<td valign="top" align="left" width="500">
<input type="text" name="doc" value="<?php echo $reg["dr"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
L OD
</td>
<td valign="top" align="left" width="200">
<input type="text" name="lod" value="<?php echo $reg["lod"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
L  OI
</td>
<td valign="top" align="left" width="200">
<input type="text" name="loi" value="<?php echo $reg["loi"];?>" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="250">
Cristal L
</td>
<td valign="top" align="left" width="400">
<input type="text" name="crl" value="<?php echo $reg["crisl"];?>" />
</td>
</tr>



<tr>
<td align="right" valign="top" width="200">
C OD
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cod" value="<?php echo $reg["cod"];?>" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
C OI
</td>
<td valign="top" align="left" width="200">
<input type="text" name="coi" value="<?php echo $reg["coi"];?>" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Cristal C
</td>
<td valign="top" align="left" width="200">
<input type="text" name="crc" value="<?php echo $reg["crisc"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="250">
LC OD
</td>
<td valign="top" align="left" width="400">
<input type="text" name="lcod" value="<?php echo $reg["lcod"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="250">
LC OI
</td>
<td valign="top" align="left" width="400">
<input type="text" name="lcoi" value="<?php echo $reg["lcoi"];?>" />
</td>
</tr>



<input type="hidden" name="clien" value="<?php echo $reg["id_clien"];?>" />



<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Modificar Receta" title="Modificar Receta" onclick="validar3()" />
</td>
</tr>

</table>
</form>
<?php
}
?>
</body>
</html>

<?php
//print_r($_GET);
require_once("../conexion/conexion.php");
$sql="SELECT *
FROM cristal
where id_cristal=".$_GET["id_cristal"]."";
$res=mysql_query($sql,$con);
?>
<html>
<head>
<title>Modificar Cristal</title>
<script language="javascript" type="text/javascript" src="../js/funciones.js"></script>
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
<h3>Modificar Cristal</h3>
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Nombre
</td>
<td valign="top" align="left" width="200">
<input type="text" name="nombre" value="<?php echo $reg["nombre"];?>" />
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
Material
</td>
<td valign="top" align="left" width="200">
<input type="text" name="material" value="<?php echo $reg["material"];?>" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Color
</td>
<td valign="top" align="left" width="200">
<input type="text" name="color" value="<?php echo $reg["color"];?>" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
Tratamiento
</td>
<td valign="top" align="left" width="200">
<input type="text" name="tratamiento" value="<?php echo $reg["tratamiento"];?>" />
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
<td align="right" valign="top" width="200">
Proveedor
</td>
<td valign="top" align="left" width="200">
<input type="text" name="proveedor" value="<?php echo $reg["proveedor"];?>" />
</td>
</tr>



<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="hidden" name="fecha" value="<?php echo date("Y-m-d");?>">
<input type="hidden" name="id_cristal" value="<?php echo $_GET["id_cristal"];?>">
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

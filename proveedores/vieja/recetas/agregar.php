<html>
<head>
<title>Agregar Receta</title>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>

<body onLoad="limpiar()">
<form action="add.php" method="post" name="form">

<?php
$sql="SELECT `clientes`.`id_cliente` , `clientes`.`nombre`
FROM `clientes`
where id_cliente=".$_GET["id_cliente"]."";
//echo $sql
$res=mysql_query($sql,$con);
//echo $res
$reg=mysql_fetch_array($res)
?>


<table align="center" width="600">
<tr>
<td valign="top" align="center" width="600" colspan="2">
<h3>Agregar Receta</h3><h3 color:red> <?php echo $reg["nombre"];?></h3>
</td>
</tr>

<tr>
<td align="right" valign="top" width="500">
Fecha
</td>
<td valign="top" align="left" width="500">
<input type="text" name="fec" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="500">
Dr.
</td>
<td valign="top" align="left" width="500">
<input type="text" name="doc" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
L OD
</td>
<td valign="top" align="left" width="200">
<input type="text" name="lod" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
L  OI
</td>
<td valign="top" align="left" width="200">
<input type="text" name="loi" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="250">
Cristal L
</td>
<td valign="top" align="left" width="400">
<input type="text" name="crl" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
C OD
</td>
<td valign="top" align="left" width="200">
<input type="text" name="cod" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
C OI
</td>
<td valign="top" align="left" width="200">
<input type="text" name="coi" />
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Cristal C
</td>
<td valign="top" align="left" width="200">
<input type="text" name="crc" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
LC OD
</td>
<td valign="top" align="left" width="200">
<input type="text" name="lcod" />
</td>
</tr>

<tr>
<td align="right" valign="top" width="200">
LC OI
</td>
<td valign="top" align="left" width="200">
<input type="text" name="lcoi" />
</td>
</tr>

<tr>
<input type="hidden" name="id_clien" value="<?=$_GET["id_cliente"]?>" />
</tr>



<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Ingresar Receta" title="Ingresar Receta" onclick="validar3()" />
</td>
</tr>

</table>
</form>
</body>
</html>

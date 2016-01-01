<?php
require_once("conexion.php");

?>
<html>
<head>
<h4><center>A DESCARGAR</center></h4>
<style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
</style>
<script language="javascript" type="text/javascript">
	function eliminar(id)
	{
		if (confirm("Realmente desea eliminar el registro?"))
		{
			window.location="eliminar.php?id_item="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>

</head>
<body onLoad="limpiar()">

<form action="cobrar.php" method="post" name="form">

<table width="80%" align="center">


<tr class="encabezado" colspan="5">
<td valign="top" align="center" width="50">
Flia
</td>
<td valign="top" align="center" width="25">
Stock
</td>
<td valign="top" align="center" width="200">
Producto
</td>
<td valign="top" align="center" width="50">
Publico
</td>
<td valign="top" align="center" width="50">
Venta
</td>
<td valign="top" align="center" width="50">
Subtotal
</td>
<td valign="top" align="center" width="100">
Proveedor
</td>
<td valign="top" align="center" width="25">&nbsp;
</td>
</tr>

<?php
$sql="select * from factemp order by id_item asc";
$res=mysql_query($sql,$con);
$i=0;
while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">


<td valign="top" align="left" width="50">
<?php
echo $reg["familia"];
?>
</td>
<td valign="top" align="center" width="25">
<?php
echo $reg["cant"];
?>
</td>
<td valign="top" align="left" width="200">
<?php
echo $reg["producto"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo "$", $reg["publico"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo $reg["vendi"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo "$", $reg["publico"]*$reg["vendi"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["proveedor"];
?>
</td>

<td valign="top" align="center" width="25">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id_item"];?>')"><img src="ima/eliminar.png" border="0"></a>
</td>

</tr>


<?php
}
?>

</table>

<input type="hidden" name="familia" value="<?php echo $reg["familia"];?>">
<input type="hidden" name="cant" value="<?php echo $reg["cant"];?>">
<input type="hidden" name="producto" value="<?php echo $reg["producto"];?>">
<input type="hidden" name="publico" value="<?php echo $reg["publico"];?>">
<input type="hidden" name="proveedor" value="<?php echo $reg["proveedor"];?>">

<hr>
<!--boton de proceso y campo suma de los valores del importe-->
<table width="80%" align="center">
	<TR>
		<?php
		$result = mysql_query("SELECT SUM(publico*vendi) as total FROM factemp");  
		$row = mysql_fetch_array($result, MYSQL_ASSOC);
		?>
		<TD valign="top" align="right" width="78%" border="1">
		<h3><?php echo "TOTAL:  $", $row["total"]; ?></h3>
		</TD>
		<TD valign="top" align="center" width="25">
		<INPUT type="submit" name="descargar" value="Descargar">
		</TD>
	</TR>
</table>
</form>
</body>
</html>

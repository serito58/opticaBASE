<?php
require_once("conexion.php");

?>
<html>
<head>
<title>
Productos Mas Vendidos
</title>
<style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
</style>
<script language="javascript" type="text/javascript">
	
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>
</head>
<BODY OnLoad="document.buscador.s.focus();">
<table width="50%" align="center">

<tr>
<td valign="top" align="center" width="50%%" colspan="3">
<h3>Productos Mas Vendidos</h3>
</td>
</tr>



<!--ac� va el div menu-->
<div align="center" class="buscador">
<form name="buscador" method="get" action="resultados.php">
<input type="text" name="s">
<a href="javascript:void(0)" title="Buscar" onClick="document.buscador.submit();">
<img src="ima/lupa.png" width="24" height="24" border="0">
</a>
</form>
</div>
<!--ac� va el div menu-->
<tr class="encabezado">
<td valign="top" align="center" width="150">
Producto
</td>
<td valign="top" align="center" width="150">
Vendidos
</td>
<td valign="top" align="center" width="150">
Provedor
</td>




</tr>

<?php
$sql="SELECT * , sum(cant) as vendidos
FROM `facturados`
where fecha > '2013-01-01'
and producto <> 'cristales'
and producto <> 'cristales2'
and producto <> 'cristales3'
and producto <> 'varios'
and producto <> 'caja'
and producto <> 'recargo interes'
and producto <> 'pago'
and producto <> 'diferencia caja'
and producto <> 'diferencia codigo 1'
and producto <> 'diferencia codigo 2'
and producto <> 'diferencia codigo 3'
group by producto
order by vendidos desc";
$res=mysql_query($sql,$con);
$i=0;
while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">


<td valign="top" align="left" width="150">
<?php
echo $reg["producto"];
?>
</td>
<td valign="top" align="center" width="150">
<?php
echo $reg["vendidos"];
?>
</td>

<td valign="top" align="left" width="150">
<?php
echo $reg["proveedor"];
?>
</td>

</tr>
<?php
}
?>


</table>
</body>
</html>

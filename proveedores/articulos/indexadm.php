<?php
require_once("conexion.php");

?>
<html>
<head>
<title>
Listado de Articulos
</title>
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
<BODY OnLoad="document.buscador.s.focus();">
<table width="1100px" align="center">

<tr>
<td valign="top" align="center" width="100%" colspan="9">
<h3>Listado de Articulos</h3>
</td>
</tr>
<!--ac� va el div menu-->
<div align="center" class="buscador">
<form name="buscador" method="get" action="resultadosadm.php">
<input type="text" name="s">
<a href="javascript:void(0)" title="Buscar" onClick="document.buscador.submit();">
<img src="ima/lupa.png" width="24" height="24" border="0">
</a>
</form>
</div>
<!--ac� va el div menu-->
<tr class="encabezado">
<td valign="top" align="center" width="25">
Flia
</td>
<td valign="top" align="center" width="10">
Cant
</td>
<td valign="top" align="center" width="300">
Producto
</td>
<td valign="top" align="center" width="50">
Costo
</td>
<td valign="top" align="center" width="50">
Publico
</td>
<td valign="top" align="center" width="50">
Multi
</td>
<td valign="top" align="center" width="100">
Proveedor
</td>

</tr>

<?php
$sql="SELECT `familia`.`id_familia` , `familia`.`familia` , `det_fact` . * , `proveedores`.`proveedor` , `proveedores`.`id_proveedor` , det_lista.costo, det_fact.multi*det_lista.costo as publico
FROM `det_fact`
LEFT JOIN `optica`.`familia` ON `det_fact`.`flia` = `familia`.`id_familia`
LEFT JOIN `optica`.`proveedores` ON `det_fact`.`id_proveedor` = `proveedores`.`id_proveedor`
LEFT JOIN optica.det_lista ON det_fact.itemlista = det_lista.id_item order by producto asc";
$res=mysql_query($sql,$con);
$i=0;
while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">


<td valign="top" align="left" width="25">
<?php
echo $reg["id_familia"];?>- <?php echo $reg["familia"];?>
</td>
<td valign="top" align="center" width="10">
<?php
echo chao_tilde($reg["cant"]);
?>
</td>
<td valign="top" align="left" width="300">
<?php
echo chao_tilde($reg["producto"]);
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo "$ ", $reg["costo"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo "$ ", round($reg["publico"],0);
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo round(($reg["publico"])/($reg["costo"]),2);
?>
</td>

<td valign="top" align="center" width="100">
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

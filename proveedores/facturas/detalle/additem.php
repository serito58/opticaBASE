<?php
require_once("conexion.php");
//print_r($_GET);

?>
<html>
<head>
  <title>Lista de Precios de ...</title>
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

<body>
<div id="detalle">

<?php
$sql="SELECT proveedor from proveedores
where id_proveedor=".$_GET["id_proveedor"]."";
$res=mysql_query($sql,$con);
//echo $res
$reg=mysql_fetch_array($res)

?>



<table width="900" align="center">
<tr>
<td valign="top" align="center" width="800" colspan="6">
<h3>Items de <?php echo $reg["proveedor"];?></h3>
</tr>

<tr>
<td valign="top" align="center" width="800" colspan="6">
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
</td>

</tr>




<tr class="encabezado">

<td valign="top" align="center" width="20">
id
</td>


<td valign="top" align="center" width="50">
Familia
</td>

<td valign="top" align="center" width="400">
Producto
</td>

<td valign="top" align="center" width="50">
Costo
</td>

<td valign="top" align="center" width="25">&nbsp;
</td>

<td valign="top" align="center" width="25">&nbsp;
</td>

<input type="hidden" name="id_factura" value=".$id_factura." />


</tr>


<?php

$sql="SELECT `familia`.`id_familia`,`familia`.`familia`, `det_lista`.`id_item`, `det_lista`.`id_lista` , `det_lista`.`producto`, `det_lista`.`costo`, `proveedores`.`proveedor`, `proveedores`.`id_proveedor`
FROM `det_lista`
 LEFT JOIN `optica`.`familia` ON `det_lista`.`flia` = `familia`.`id_familia` 
 LEFT JOIN `optica`.`proveedores` ON `det_lista`.`idproveedor` = `proveedores`.`id_proveedor` 
         where id_proveedor=".$_GET["id_proveedor"]." ORDER BY `producto` ASC"
        ;
$res=mysql_query($sql,$con);

$i=0;
while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')" 
onclick="document.location.href='agregaritem.php?id_item=<?php echo $reg["id_item"];?>&id_factura=<?php echo $_GET['id_factura']?>'">


<td valign="top" align="left" width="20">
<?php
echo $reg["id_item"];
?>
</td>

<td valign="top" align="left" width="30">
<?php
echo $reg["id_familia"];?>- <?php echo $reg["familia"];
?>
</td>
<td valign="top" align="left" width="400">
<?php
echo $reg["producto"];
?>
</td>
<td valign="top" align="right" width="50">
<?php
echo "$ ",$reg["costo"];
?>
</td>


<td valign="top" align="center" width="25">
<a href="modificar.php?id_item=<?php echo $reg["id_item"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>
</td>


<td valign="top" align="center" width="25">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id_item"];?>')"><img src="ima/eliminar.png" border="0"></a>
</td>
</tr>

<?php
}  //llave cierre del while
?>

<tr>
<td valign="top" align="center" width="400" colspan="6">
<hr/>



<input type="button" value="Volver" title="Volver" onclick="history.back();" />
</td>
</tr>

</tr>
</table>
</div>
</body>
</html>


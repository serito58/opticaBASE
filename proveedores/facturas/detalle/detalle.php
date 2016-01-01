<?php
require_once("conexion.php");
//print_r($_GET);
$id_factura=$_GET['id_factura'];

?>
<html>
<head>
  <title>Detalle de Items</title>
<style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
</style> 
 <script type="text/javascript" language="javascript" src="js/funciones.js"></script>

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
<div id="detalle">

<?php
$sql="SELECT `proveedores`.`id_proveedor`, `proveedores`.`proveedor`, `facturas`.`id_factura`,`facturas`.`numfact`, `facturas`.`fecha`
FROM `facturas`
 LEFT JOIN `optica`.`proveedores` ON `facturas`.`id_proveedor` = `proveedores`.`id_proveedor` 
where id_factura=".$_GET["id_factura"]."";

$res=mysql_query($sql,$con);

$reg=mysql_fetch_array($res)

?>



<table width="900" align="center">
<tr>
<td valign="top" align="center" width="900" colspan="7">
<h3>Items de <?php echo $reg["proveedor"];?></h3>
</td>
</tr>

<TR>
<TD valign="top" align="center" width="1000" colspan="7">
 Fact Nro   <?php echo $reg["numfact"];?>
</TD>

<tr>
<td valign="top" align="right" width="400" colspan="7">


<a href="additem.php?id_factura=<?php echo $_GET["id_factura"];?>&id_proveedor=<?php echo $_GET["id_proveedor"];?>" title="Agregar item"><img src="ima/add48x48.png" border="0"></a>


&nbsp;&nbsp;||&nbsp;&nbsp;
<a href="../index.php?id_proveedor=<?php echo $_GET["id_proveedor"];?>">volver</a>
</td>
</tr>



<tr class="encabezado">


<td valign="top" align="center" width="100">
Familia
</td>

<td valign="top" align="center" width="10">
Stock
</td>


<td valign="top" align="center" width="350">
Producto
</td>

<td valign="top" align="center" width="70">
Costo
</td>

<td valign="top" align="center" width="50">
Publico
</td>

<td valign="top" align="center" width="50">
Multi
</td>


<td valign="top" align="center" width="25">&nbsp;
</td>

<td valign="top" align="center" width="25">&nbsp;
</td>


</tr>


<?php

$sql="SELECT `familia`.`id_familia` , `familia`.`familia` , `det_fact` . * , `proveedores`.`proveedor` , `proveedores`.`id_proveedor` , det_lista.costo
FROM `det_fact`
LEFT JOIN `optica`.`familia` ON `det_fact`.`flia` = `familia`.`id_familia`
LEFT JOIN `optica`.`proveedores` ON `det_fact`.`id_proveedor` = `proveedores`.`id_proveedor`
LEFT JOIN optica.det_lista ON det_fact.itemlista = det_lista.id_item
WHERE id_factura =".$_GET["id_factura"]." ORDER BY `det_fact`.`producto` ASC"
        ;
$res=mysql_query($sql,$con);

while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">


<td valign="top" align="left" width="30">
<?php
echo $reg["id_familia"];?>- <?php echo $reg["familia"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo $reg["cant"];
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
<td valign="top" align="right" width="50">
<?php
echo "$",round(($reg["multi"])*($reg["costo"]),2);
?>
</td>
<td valign="top" align="right" width="50">
<?php
echo $reg["multi"];
?>
</td>





<td valign="top" align="center" width="25">
<a href="modifitem.php?id_item=<?php echo $reg["id_item"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>
</td>


<td valign="top" align="center" width="25">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id_item"];?>')"><img src="ima/eliminar.png" border="0"></a>
</td>


<?php
}  //llave cierre del while
?>

<tr>
<td valign="top" align="right" width="400" colspan="7">

<hr/>

<a href="additem.php?id_factura=<?php echo $_GET["id_factura"];?>&id_proveedor=<?php echo $_GET["id_proveedor"];?>" title="Agregar item"><img src="ima/add48x48.png" border="0"></a>

&nbsp;&nbsp;||&nbsp;&nbsp;
<a href="../index.php?id_proveedor=<?php echo $_GET["id_proveedor"];?>">volver</a>
</td>

</tr>

</table>
</div>


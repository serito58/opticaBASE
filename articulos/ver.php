<?php
require_once("conexion.php");
//print_r($_GET);

?>
<html>
<head>
  <title>Detalle de Items</title>
<style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
</style> 
 <script type="text/javascript" language="javascript" src="js/funciones.js"></script>
</head>
<div id="detalle">

<?php
$sql="SELECT `proveedores`.`id_proveedor`, `proveedores`.`proveedor`, `listas`.`id_lista`, `listas`.`fecha`
FROM `listas`
 LEFT JOIN `optica`.`proveedores` ON `listas`.`id_proveedor` = `proveedores`.`id_proveedor` 
where id_lista=".$_GET["id_lista"]."";
//echo $sql
$res=mysql_query($sql,$con);
//echo $res
$reg=mysql_fetch_array($res)

?>



<table width="1000" align="center">
<tr>
<td valign="top" align="center" width="1000" colspan="7">
<h3>Lista de <?php echo $reg["proveedor"];?></h3>(<?php echo $reg["fecha"];?>)

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="additem.php?id_lista=<?php echo $_GET["id_lista"];?>&id_proveedor=<?php echo $_GET["id_proveedor"];?>" title="Agregar item"><img src="ima/add48x48.png" border="0" width="40px" height="40px"></a>



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


</tr>


<?php

$sql="SELECT `familia`.`id_familia`,`familia`.`familia`, `det_lista`.`id_item`, `det_lista`.`id_lista` , `det_lista`.`producto`, `det_lista`.`costo`, `proveedores`.`proveedor`, `proveedores`.`id_proveedor`
FROM `det_lista`
 LEFT JOIN `optica`.`familia` ON `det_lista`.`flia` = `familia`.`id_familia` 
 LEFT JOIN `optica`.`proveedores` ON `det_lista`.`idproveedor` = `proveedores`.`id_proveedor` 
         where id_lista=".$_GET["id_lista"]." ORDER BY `det_lista`.`id_item` DESC"
        ;
$res=mysql_query($sql,$con);

while ($reg=mysql_fetch_array($res))
{
?>
<tr class="registros">
</td>

<td valign="top" align="left" width="20">
<?php
echo $reg["id_item"];
?>
</td>

<td valign="top" align="left" width="30">
<?php
echo $reg["id_familia"];?>- <?echo $reg["familia"];
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


<?php
}  //llave cierre del while
?>

<tr>
<td valign="top" align="right" width="400" colspan="5">

<hr/>




<a href="additem.php?id_lista=<?php echo $_GET["id_lista"];?>&id_proveedor=<?php echo $_GET["id_proveedor"];?>" title="Agregar item"><img src="ima/add48x48.png" border="0"></a>


&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Volver" title="Volver" onclick="window.location='../' />
</td>
</tr>



</tr>

</table>
</div>


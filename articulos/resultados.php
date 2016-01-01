<?php
require_once("conexion.php");

$sql="select count(*) as cuantos `familia`.`id_familia`,`familia`.`familia`, `det_fact`.`cant`, `det_fact`.`producto`, `det_fact`.`costo`,det_fact.publico,`proveedores`.`proveedor`
FROM `familia`, `det_fact`, `proveedores`
where familia.id_familia=det_fact.flia
and proveedores.id_proveedor=det_fact.id_proveedor
and
producto like '%".$_GET["s"]."%' order by producto asc";
//echo $sql;
$res=mysql_query($sql,$con);
if ($reg=mysql_fetch_array($res))
{
	$total=$reg["cuantos"];
}
$resto=$total % 5;
$ultimo=$total-$resto;

//****************************************************************
if (isset($_GET["pos"]))
{
	$inicio=$_GET["pos"];
}else
{
	$inicio=0;
}
$sql="select `familia`.`id_familia`,`familia`.`familia`, `det_fact`.`cant`, `det_fact`.`producto`, `det_fact`.`costo`,det_fact.publico,`proveedores`.`proveedor`
FROM `familia`, `det_fact`, `proveedores`
where familia.id_familia=det_fact.flia
and proveedores.id_proveedor=det_fact.id_proveedor
and
producto like '%".$_GET["s"]."%' 
order by producto asc
limit $inicio,100
";
$res=mysql_query($sql,$con);



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
<table width="900" align="center">

<tr>
<td valign="top" align="center" width="900" colspan="5">
<h3>Listado de Articulos</h3>
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
<td valign="top" align="center" width="50">
Flia
</td>

<td valign="top" align="center" width="25">
Cant
</td>

<td valign="top" align="center" width="200">
Producto
</td>


<td valign="top" align="center" width="50">
Publico
</td>

<td valign="top" align="center" width="100">
Proveedor
</td>


</tr>

<?php
//$sql="select * from proveedores order by proveedor asc";
//$res=mysql_query($sql,$con);
$i=0;
while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">



<td valign="top" align="left" width="50">
<?php
echo $reg["id_familia"];?>- <?echo $reg["familia"];
?>
</td>

<td valign="top" align="center" width="25">
<?php
echo chao_tilde($reg["cant"]);
?>
</td>

<td valign="top" align="left" width="200">
<?php
echo chao_tilde($reg["producto"]);
?>
</td>



<td valign="top" align="center" width="50">
<?php
echo "$ ", $reg["publico"];
?>
</td>



<td valign="top" align="center" width="100">
<?php
echo $reg["proveedor"];
?>
</td>

<?php
}
?>

</table>
</body>
</html>

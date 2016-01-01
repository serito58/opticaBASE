<?php
require_once("conexion.php");
//print_r($_GET);
$sql="select count(*) as cuantos from proveedores
where
proveedor like '%".$_GET["s"]."%'
or
marcas like '%".$_GET["s"]."%'
or
viajante like '%".$_GET["s"]."%'
order by proveedor asc";
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
$sql="select * from proveedores
where
proveedor like '%".$_GET["s"]."%' 
or
marcas like '%".$_GET["s"]."%' 
or
viajante like '%".$_GET["s"]."%'
order by proveedor asc
limit $inicio,100
";
$res=mysql_query($sql,$con);



?>
<html>
<head>
<title>
Listado de Marcas
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
			window.location="eliminar.php?id_proveedor="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>
</head>
<BODY OnLoad="document.buscador.s.focus();">S
<table width="800" align="center">

<tr>
<td valign="top" align="center" width="800" colspan="3">
<h3>Listado de Marcas</h3>
</td>
</tr>
<!--ac� va el div menu-->
<div align="center" class="buscador">
<form name="buscador" method="get" action="marcas.php">
<input type="text" name="s">
<a href="javascript:void(0)" title="Buscar" onClick="document.buscador.submit();">
<img src="ima/lupa.png" width="24" height="24" border="0">
</a>
</form>
</div>
<!--ac� va el div menu-->
<tr class="encabezado">
<td valign="top" align="center" width="250">
Proveedor
</td>
<td valign="top" align="center" width="300">
Marcas
</td>
<td valign="top" align="center" width="250">
Viajante
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


<td valign="top" align="left" width="150">
<?php
echo chao_tilde($reg["proveedor"]);
?>
</td>
<td valign="top" align="left" width="150">
<?php
echo chao_tilde($reg["marcas"]);
?>
</td>
<td valign="top" align="left" width="150">
<?php
echo chao_tilde($reg["viajante"]);
?>
</td>

<?php
}
?>


</table>
</body>
</html>

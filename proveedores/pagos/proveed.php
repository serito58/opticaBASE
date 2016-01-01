<?php
require_once("conexion.php");
//print_r($_GET);
$sql="SELECT * from proveedores
where
proveedor like '%".$_GET["s"]."%'

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


$sql="SELECT * from proveedores
where
proveedor like '%".$_GET["s"]."%'

order by proveedor asc";
$res=mysql_query($sql,$con);


?>


<html>
<head>
<title>
Listado de Proveedores
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
<BODY OnLoad="document.buscador.s.focus();">
<table width="400" align="center">

<tr>
<td valign="top" align="center" width="100%" colspan="12">
<h3>Listado de Proveedores</h3>
</td>
</tr>
<!---------------------------------aca va el div menu-->
<div align="center" class="buscador">
<form name="buscador" method="get" action="proveed.php">
<input type="text" name="s">
<a href="javascript:void(0)" title="Buscar" onClick="document.buscador.submit();">
<img src="ima/lupa.png" width="24" height="24" border="0">
</a>
</form>
</div>
<!--------------------------------aca va el div menu-->
<tr class="encabezado">
<td valign="top" align="center" width="300">
Proveedor
</td>


<td valign="top" align="center" width="100">&nbsp;
<strong>Pagos</strong>
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


<td valign="top" align="left" width="300">
<?php
echo $reg["proveedor"];
?>
</td>



<td valign="top" align="center" width="100">
<a href="./pagos.php?id_proveedor=<?php echo $reg["id_proveedor"];?>" target=pagos title="Pagos"><img src="ima/folder.png" border="0"></a>
</td>




</tr>
<?php
}
?>


</table>
</body>
</html>

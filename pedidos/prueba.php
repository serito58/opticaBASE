<?php
require_once("conexion.php");

$sql="select count(*) as cuantos from pedidos
where
cliente like '%".$_GET["s"]."%' 
or
detalle like '%".$_GET["s"]."%'
or 
laborat like '%".$_GET["s"]."%'
";
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
$sql="select * from pedidos
where
cliente like '%".$_GET["s"]."%' 
or
detalle like '%".$_GET["s"]."%'
or 
laborat like '%".$_GET["s"]."%'
limit $inicio,5
";
$res=mysql_query($sql,$con);

?>
<html>
<head>
<title>
Pedidos
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
			window.location="eliminar.php?id_pedido="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>
</head>


<body>

<table width="100%" align="center">

<td>
<td valign="top" align="center" width="100%" colspan="8">
<h2>PEDIDOS COMPLETO</h2>
</td>




<tr>
<td valign="top" align="right" width="400" colspan="5" >
<a href="agregar.php" title="Agregar Pedido"><img src="ima/add48x48.png" border="0"></a>
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

</div>

<tr class="encabezado">
<td valign="top" align="center" width="25">
id
</td>

<td valign="top" align="center" width="50">
Cant
</td>
<td valign="top" align="center" width="250">
Detalle
</td>
<td valign="top" align="center" width="250">
Cliente
</td>
<td valign="top" align="center" width="50">
F.pedido
</td>
<td valign="top" align="center" width="50">
F.recibido
</td>
<td valign="top" align="center" width="100">
Laborat
</td>
<td valign="top" align="center" width="50">
Tipo
</td>
<td valign="top" align="center" width="100">
Obs
</td>
<td valign="top" align="center" width="25">&nbsp;
</td>
<td valign="top" align="center" width="25">&nbsp;
</td>
</tr>

<?php
if (mysql_num_rows($res)==0)

{
	?>
	<tr>
	<td valign="top" align="center" width="500" colspan="3" style="background-color:#f0f0f0">
	No hay registros para ese criterio de b&uacute;squeda
	</td>
	</tr>
	<?php
}else
{

$impresos=0;
while ($reg=mysql_fetch_array($res))
{
$impresos++;
?>
<tr style="background-color:#f0f0f0">
<td valign="top" align="center" width="100">
<?php echo chao_tilde(str_replace("".$_GET["s"]."","<b>".$_GET["s"]."</b>",$reg["id_pedido"]));?>
</td>
<td valign="top" align="center" width="100">
<?php echo chao_tilde(str_replace("".$_GET["s"]."","<b>".$_GET["s"]."</b>",$reg["cant"]));?>
</td>

<td valign="top" align="center" width="300">
<?php echo chao_tilde(str_replace("".$_GET["s"]."","<b>".$_GET["s"]."</b>",$reg["detalle"]));?>
</td>
<td valign="top" align="center" width="100">
<?php echo chao_tilde(str_replace("".$_GET["s"]."","<b>".$_GET["s"]."</b>",$reg["cliente"]));?>
</td>
<td valign="top" align="center" width="100">
<?php echo chao_tilde(str_replace("".$_GET["s"]."","<b>".$_GET["s"]."</b>",$reg["fpedido"]));?>
</td>
<td valign="top" align="center" width="100">
<?php echo chao_tilde(str_replace("".$_GET["s"]."","<b>".$_GET["s"]."</b>",$reg["frecibido"]));?>
</td>
<td valign="top" align="center" width="100">
<?php echo chao_tilde(str_replace("".$_GET["s"]."","<b>".$_GET["s"]."</b>",$reg["laborat"]));?>
</td>
<td valign="top" align="center" width="100">
<?php echo chao_tilde(str_replace("".$_GET["s"]."","<b>".$_GET["s"]."</b>",$reg["tipo"]));?>
</td>
<td valign="top" align="center" width="100">
<?php echo chao_tilde(str_replace("".$_GET["s"]."","<b>".$_GET["s"]."</b>",$reg["obs"]));?>
</td>


<td valign="top" align="center" width="25">
<a href="modificar.php?id_pedido=<?php echo $reg["id_pedido"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>
</td>
<td valign="top" align="center" width="25">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id_pedido"];?>')"><img src="ima/eliminar.png" border="0"></a>
</td>


</tr>
<?php
}
}
?>
<tr>
<td valign="top" align="center" width="500" colspan="11">
<hr>
<!--*************************************-->
<?php
if (!$inicio==0)
{
	?>
	<a href="resultados.php?s=<?php echo $_GET["s"]?>&pos=0" title="Primero">Primero</a>
	<?php
}else
{
	?>
	Primero
	<?php
}
?>
<!--*************************************-->
<?php
if ($inicio==0)
{
	?>
	Anterior
	<?php
}else
{
	?>
	<a href="resultados.php?s=<?php echo $_GET["s"]?>&pos=<?php echo $inicio-5;?>" title="Anterior">Anterior</a>
	<?php
}
?>

<!--*************************************-->
<?php
if ($impresos==5)
{
	?>
	<a href="resultados.php?s=<?php echo $_GET["s"]?>&pos=<?php echo $inicio+5;?>" title="Siguientes">Siguiente</a>
	<?php
}else
{
	?>
	Siguientes
	<?php
}
?>
<!--*************************************-->
<?php
if ($inicio==$ultimo)
{
	?>
	Ultimo
	<?php
}else
{
?>
<a href="resultados.php?s=<?php echo $_GET["s"]?>&pos=<?php echo $ultimo;?>" title="Ultimo">Ultimo</a>
<?php
}
?>
<!--*************************************-->
</td>
</tr>

</table>
</div>

</div>

</body>
</html>
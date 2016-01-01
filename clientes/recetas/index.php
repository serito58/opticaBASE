<?php
require_once("conexion.php");
//print_r($_GET);
?>
<html>
<head>
<title>Recetas de Clientes</title>
<style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
</style>
<script language="javascript" type="text/javascript">
	function eliminar(id)
	{
		if (confirm("Realmente desea eliminar el registro?"))
		{
			window.location="eliminar.php?id_receta="+id;
		}
	}
</script>
</head>
<body>

<form>
<?php
$sql="SELECT `clientes`.`id_cliente` , `clientes`.`nombre`
FROM `clientes`
where id_cliente=".$_GET["id_cliente"]."";
//echo $sql
$res=mysql_query($sql,$con);
//echo $res
$reg=mysql_fetch_array($res)
?>
<table width="1150" align="center">

<tr>
<td valign="top" align="center" width="1150" colspan="10">
<h3>Recetas de</h3><h3 color:red> <?php echo $reg["nombre"];?></h3>
</td>
</tr>

<tr class="encabezado">
<td valign="top" align="center" width="100">
Fecha
</td>
<td valign="top" align="center" width="200">
Dr
</td>
<td valign="top" align="center" width="200">
L OD
</td>
<td valign="top" align="center" width="200">
L OI
</td>

<td valign="top" align="center" width="300">
Crist L
</td>

<td valign="top" align="center" width="200">
C OD
</td>

<td valign="top" align="center" width="200">
C OI
</td>


<td valign="top" align="center" width="300">
Crist C
</td>

<td valign="top" align="center" width="300">
LC OD
</td>

<td valign="top" align="center" width="300">
LC OI
</td>


<td valign="top" align="center" width="25">&nbsp;

</td>
<td valign="top" align="center" width="25">&nbsp;

</td>
</tr>

<?php

$sql="SELECT * FROM recetas where id_clien =".$_GET["id_cliente"]." order by fecha desc";
//print_r($_GET);


$res=mysql_query($sql,$con);

while ($reg=mysql_fetch_array($res))
{
?>
<tr class="registros">
<td valign="top" align="left" width="100">
<?php
echo chao_tilde($reg["fecha"]);
?>
</td>
<td valign="top" align="left" width="100">
<?php
echo chao_tilde($reg["dr"]);
?>
</td>
<td valign="top" align="left" width="300">
<?php
echo chao_tilde($reg["lod"]);
?>
</td>
<td valign="top" align="left" width="300">
<?php
echo chao_tilde($reg["loi"]);
?>
</td>
<td valign="top" align="left" width="300">
<?php
echo chao_tilde($reg["crisl"]);
?>
</td>
<td valign="top" align="left" width="300">
<?php
echo chao_tilde($reg["cod"]);
?>
</td>
<td valign="top" align="left" width="300">
<?php
echo chao_tilde($reg["coi"]);
?>
</td>
<td valign="top" align="left" width="300">
<?php
echo chao_tilde($reg["crisc"]);
?>
</td>

<td valign="top" align="left" width="300">
<?php
echo chao_tilde($reg["lcod"]);
?>
</td>

<td valign="top" align="left" width="300">
<?php
echo chao_tilde($reg["lcoi"]);
?>
</td>


<td valign="top" align="center" width="25">
<a href="modificar.php?id_receta=<?php echo $reg["id_receta"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>
</td>
<td valign="top" align="center" width="25">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id_receta"];?>')"><img src="ima/eliminar.png" border="0"></a>
</td>

<input type="hidden" name="id_clien" value="<?=$_GET["id_cliente"]?>" />

</tr>
<?php
}
?>
<tr>
<td valign="top" align="right" width="400" colspan="6">

<input type="button" value="Volver" title="Volver" onclick="history.back();" />


&nbsp;&nbsp;||&nbsp;&nbsp;


<a href="agregar.php?id_cliente=<?php echo $_GET["id_cliente"];?>" title="Agregar Receta"><img src="ima/add48x48.png" border="0"></a>


</td>
</tr>

</table>

</form>
</body>
</html>

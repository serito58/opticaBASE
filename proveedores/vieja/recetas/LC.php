<?php
require_once("conexion.php");
//print_r($_GET);
?>
<html>
<head>
<title>LC de Clientes</title>
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
$sql="SELECT `Clientes`.`Id_Cliente` , `Clientes`.`Apellido`
FROM `Clientes`
where Id_Cliente=".$_GET["Id_Cliente"]."";
//echo $sql
$res=mysql_query($sql,$con);
//echo $res
$reg=mysql_fetch_array($res)
?>
<table width="1150" align="center">

<tr>
<td valign="top" align="center" width="1150" colspan="10">
<h3>LC de</h3><h3 color:red> <?php echo $reg["Apellido"];?></h3>
</td>
</tr>

<tr class="encabezado">
<td valign="top" align="center" width="100">
Dr
</td>
<td valign="top" align="center" width="200">
Fecha
</td>
<td valign="top" align="center" width="200">
OD
</td>
<td valign="top" align="center" width="200">
OI
</td>
<td valign="top" align="center" width="200">
Tipo de Lente
</td>


</tr>

<?php

$sql="SELECT * FROM LC where Id_Cliente =".$_GET["Id_Cliente"]." ";
//print_r($_GET);


$res=mysql_query($sql,$con);

while ($reg=mysql_fetch_array($res))
{
?>
<tr class="registros">
<td valign="top" align="left" width="100">
<?php
echo chao_tilde($reg["Dr"]);
?>
</td>
<td valign="top" align="left" width="100">
<?php
echo chao_tilde($reg["Fecha"]);
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
echo chao_tilde($reg["Tipolente"]);
?>
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

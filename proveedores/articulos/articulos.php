<?php
require_once("conexion/conexion.php");
?>
<head>
  <title>Detalle de Art&iacute;culos</title>
<style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
</style>  
<script type="text/javascript" language="javascript" src="js/funciones.js"></script>
</head>
<div id="detalle">
<table width="750" align="center">
<tr>
<td valign="top" align="center" width="750" colspan="8">
<h3>Detalle de Facturas</h3>
</td>
</tr>

<tr class="encabezado">
<td valign="top" align="center" width="50">
id
</td>
<td valign="top" align="center" width="400">
Articulo
</td>
<td valign="top" align="center" width="150">
Costo
</td>
<td valign="top" align="center" width="50">
multi
</td>
<td valign="top" align="center" width="75">
id_fact
</td>

<?php
$sql="select * from articulos where id_fact=".$_GET["id"]."";
$res=mysql_query($sql,$con);
while ($reg=mysql_fetch_array($res))
{
?>
<tr class="registros">
<td valign="top" align="center" width="150">
<?php
echo $reg["id_articulo"];
?>
</td>
<td valign="top" align="left" width="200">
<?php
echo chao_tilde($reg["articulo"]);
?>
</td>
<td valign="top" align="center" width="150">
<?php
echo $reg["costo"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo $reg["multi"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["id_fact"];
?>
<?php
}
?>
</td>
</tr>

</table>

</div>


<?php
require_once("../conexion/conexion.php");
?>
<html>
<head>
  <title>Cumple de Clientes</title>
	<style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
	</style>  

	<script type="text/javascript" language="javascript" src="js/funciones.js"></script>
</head>


<div id="encabezado">
<table width="700" align="center">
<?php

$dia= date("d");
$mes= date("m");
?>
	<tr>
		<td valign="top" align="center" width="700" colspan="3">
		<h3>Clientes que cumplen hoy, dia <?php echo date("d-m");?></h3>
		</td>
	</tr>

	<tr class="encabezado">
		<td valign="top" align="center" width="400">
		Apellido
		</td>
		<td valign="top" align="center" width="150">
		Telefono
		</td>

	</tr>




<?php

 //selecciono los registros que cumplen años hoy

$sql=" SELECT * FROM clientes WHERE day(fnac) =$dia and month(fnac)=$mes order by fnac asc";
$res=mysql_query($sql,$con);
while ($reg=mysql_fetch_array($res))
{
?>


	<tr class="registros">
		<td valign="top" align="left" width="400">
		<?php
		echo $reg["nombre"];
		?>
		</td>
		<td valign="top" align="left" width="150">
		2920<?php
		echo $reg["telefono"];
		?>
		</td>
		
	</tr>
<?php
}
?>


</table>

</div>


</html>
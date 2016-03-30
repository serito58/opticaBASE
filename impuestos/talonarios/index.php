<?php
require_once("../../conexion/conexion.php");
?>
<html>
	<head>
	<title>
	Ingresar Talonarios de Ventas
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
				window.location="eliminar.php?id="+id;
			}
		}
		function cambiar(id,color)
		{
			document.getElementById(id).style.backgroundColor=color;
		}
	</script>
	</head>

	<BODY>
	<table width="100%" align="center">
	<tr>
	<td valign="top" align="center" width="100%" colspan="5">
	<h3>Ingresar Talonarios de Ventas</h3>
	</td>
	</tr>
	</table>


		<table width="350" align="center">
		<tr>
			<td valign="top" align="right" width="200" colspan="5">
			<a href="agregar.php" title="Agregar Venta"><img src="../../ima/add48x48.png" border="0"></a>
			</td>
		</tr>

		<tr class="encabezado">
			<td valign="top" align="center" width="100">
			Numero
			</td>
			<td valign="top" align="center" width="100">
			Fecha
			</td>
			<td valign="top" align="center" width="200">
			Venta
			</td>
			<td valign="top" align="center" width="25">&nbsp;
			</td>
			<td valign="top" align="center" width="25">&nbsp;
			</td>
		</tr>

				<?php
				$sql="SELECT * from talonarios order by numero desc limit 60";
				$res=mysql_query($sql,$con);
				$i=0;
				while ($reg=mysql_fetch_array($res))
				{
				$i++;
				?>
		<tr class="registros"id="<?php echo "id_$i";?>" 
		style="background-color:#f0f0f0" 
		onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" 
		onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">

			<td valign="top" align="center" width="100">
			<?php
			echo $reg["numero"];
			?>
			</td>
			<td valign="top" align="center" width="100">
			<?php
			echo $reg["fecha"];
			?>
			</td>
			<td valign="top" align="center" width="200">
			<?php
			echo "$",$reg["total"];
			?>
			</td>
			<td valign="top" align="center" width="25">
			<a href="modificar.php?id=<?php echo $reg["id"];?>" title="Modificar"><img src="../../ima/editar.png" border="0"></a>
			<td valign="top" align="center" width="25">
			<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id"];?>')"><img src="../../ima/eliminar.png" border="0"></a>
			</td>
		</tr>

		<?php
		}
		?>

		</table>
	</body>
</html>

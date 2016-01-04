<?php
require_once("../conexion/conexion.php");
?>
<html>
	<head>
	<title>
	Impuestos
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

	<BODY OnLoad="document.buscador.s.focus();">



		<table width="500" align="center">
		

		<tr class="encabezado">
			<td valign="top" align="center" width="100">
			Ano
			</td>
			<td valign="top" align="center" width="100">
			Mes
			</td>
			<td valign="top" align="center" width="200">
			VENTAS
			</td>
			<td valign="top" align="center" width="200">
			COMPRAS
			</td><td valign="top" align="center" width="200">
			Diferencia
			</td>
			
		</tr>

				<?php

				$sql="SELECT year(facturas.fecha) as year, month(facturas.fecha) as mes , SUM(importe) as importe,
(SELECT SUM(venta) from ivaventas where year(fecha)=year and month(fecha)=mes) as venta
from facturas
where fechapago not like '%rem%'
group by year(facturas.fecha) desc,month(facturas.fecha) desc
limit 12";
$res=mysql_query($sql,$con);

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
			echo $reg["mes"]
			?>
			</td>
			<td valign="top" align="center" width="100">
			<?php
			echo $reg["year"];
			?>
			</td>
			<td valign="top" align="center" width="200">
			<?php
			echo "$",round($reg["venta"],2);
			?>
			</td>
			<td valign="top" align="center" width="200">
			<?php
			echo "$",round($reg["importe"],2);
			?>
			</td>
		
		<td valign="top" align="center" width="200">
			<?php
			echo "$",round($reg["venta"]-$reg["importe"],2);
			?>
			</td>
		
			
		
		</tr>

		<?php
		}
		?>

		</table>
	</body>
</html>

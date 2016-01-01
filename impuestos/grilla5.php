<?php

require_once("../conexion/conexion.php");
?>
<html>
<table align="center" width="800px" border="1">
	<tr>
	<td valign="top" align="center" width="100%" colspan="13">
	<b>IVA VENTAS</b>
	</td>
	</tr>
    <tr>
	<td align="center" bgcolor="red">ANO</td>
	<td align="center">Ene</td>
	<td align="center">Feb</td>
	<td align="center">Mar</td>
	<td align="center">Abr</td>
	<td align="center">May</td>
	<td align="center">Jun</td>
	<td align="center">Jul</td>
	<td align="center">Ago</td>
	<td align="center">Set</td>
	<td align="center">Oct</td>
	<td align="center">Nov</td>
	<td align="center">Dic</td>
    </tr>

<?php
				$sql="SELECT year(fecha)as anio,
				(SELECT sum(venta)as venta from ivaventas where year(fecha)='anio' and month(fecha)='1' )as ene,
				(SELECT sum(venta)as venta from ivaventas where year(fecha)='anio' and month(fecha)='2' )as feb,
				(SELECT sum(venta)as venta from ivaventas where year(fecha)='anio' and month(fecha)='3' )as mar,
				(SELECT sum(venta)as venta from ivaventas where year(fecha)='anio' and month(fecha)='4' )as abr,
				(SELECT sum(venta)as venta from ivaventas where year(fecha)='anio' and month(fecha)='5' )as may,
				(SELECT sum(venta)as venta from ivaventas where year(fecha)='anio' and month(fecha)='6' )as jun,
				(SELECT sum(venta)as venta from ivaventas where year(fecha)='anio' and month(fecha)='7' )as jul,
				(SELECT sum(venta)as venta from ivaventas where year(fecha)='anio' and month(fecha)='8' )as ago,
				(SELECT sum(venta)as venta from ivaventas where year(fecha)='anio' and month(fecha)='9' )as sep,
				(SELECT sum(venta)as venta from ivaventas where year(fecha)='anio' and month(fecha)='10' )as oct,
				(SELECT sum(venta)as venta from ivaventas where year(fecha)='anio' and month(fecha)='11' )as nov,
				(SELECT sum(venta)as venta from ivaventas where year(fecha)='anio' and month(fecha)='12' )as dic
				 from ivaventas group by year(fecha)";
				$res=mysql_query($sql,$con);
				while($reg=mysql_fetch_array($res))
				{
				?>
			<tr>
				<td>
				<?php echo $reg["anio"]; ?>
				</td>
				<td>
				<?php echo $reg["ene"]; ?>
				</td>
				<td>
				<?php echo $reg["feb"]; ?>
				</td>
				<td>
				<?php echo $reg["mar"]; ?>
				</td>
				<td>
				<?php echo $reg["abr"]; ?>
				</td>
				<td>
				<?php echo $reg["may"]; ?>
				</td>
				<td>
				<?php echo $reg["jun"]; ?>
				</td>
				<td>
				<?php echo $reg["jul"]; ?>
				</td>
				<td>
				<?php echo $reg["ago"]; ?>
				</td>
				<td>
				<?php echo $reg["sep"]; ?>
				</td>
				<td>
				<?php echo $reg["oct"]; ?>
				</td>
				<td>
				<?php echo $reg["nov"]; ?>
				</td>
				<td>
				<?php echo $reg["dic"]; ?>
				</td>
			
				<?php
				}
				?>
			</tr>

</table>
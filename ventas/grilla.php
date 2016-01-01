<?php
require_once("conexion.php");
$hoy=date(Y."-".m."-".d); 
//echo $hoy;
$año=date(Y);
//echo $año;
$mes=date(m);
//echo $mes;
$dia=date(d);
//echo $dia;

?>



<table border="1" align="center">
	<tr align="center" bgcolor="yellow">
	<td></td>
	<td></td>
	<td><h3><b>MES<b></h3></td>
	<td><h3><b><?php echo date(F); ?><b></h3></td>
	<td></td>
	<td></td>
	<td></td>
	</tr>
	<tr bgcolor="red">
		<td width="70" align="center"><h3><b>Dia<b></h3></td>
		<td width="100"align="center"><h3><b>Total<b></h3></td>
		<td width="100"align="center"><h3><b>Tarjetas<b></h3></td>
		<td width="100"align="center"><h3><b>Retiro<b></h3></td>
		<td width="100"align="center"><h3><b>Caja<b></h3></td>
		<td width="100"align="center"><h3><b>Gastos<b></h3></td>
		<td width="150"align="center"><h3><b>Venta Total<b></h3></td>
		
	</tr>
		
<?php

$sql="SELECT day(fecha) as dia , SUM(publico * cant) as total,
(SELECT SUM(publico * cant) from facturados where day(fecha)=dia and producto like '%TARJETA%' and year(fecha)=$año and month(fecha)=$mes) as tarjeta,
(SELECT SUM(publico * cant) from facturados where day(fecha)=dia and producto='RETIRO' and year(fecha)=$año and month(fecha)=$mes) as retiro,
(SELECT SUM(publico * cant) from facturados where day(fecha)=dia and producto='CAJA' and year(fecha)=$año and month(fecha)=$mes) as caja,
(SELECT SUM(publico * cant) from facturados where day(fecha)=dia and producto='GASTOS' and year(fecha)=$año and month(fecha)=$mes) as gastos,
(SELECT SUM(publico * cant) from facturados where day(fecha)=dia and producto='MUTUAL' and year(fecha)=$año and month(fecha)=$mes) as mutual,
(SELECT SUM(publico * cant) from facturados where day(fecha)=dia and producto='SALDO' and year(fecha)=$año and month(fecha)=$mes) as saldo
from facturados
where month(fecha)=$mes
and year(fecha)=$año
group by year(fecha), day(fecha)";
$res=mysql_query($sql,$con);
while ($reg=mysql_fetch_array($res))
{
?>

	<tr align="center">
		<td align="center"><h3><b><?php $dia=$reg["dia"]; echo $dia; ?><b></h3></td>  <!--Este es el dia del mes-->
		
		<td><h3><b><?php $total=$reg["total"]; echo "$",$total; ?><b></h3></td> <!--Este es el efectivo de la caja-->
		<td><h3><b><?php $tarjeta=$reg["tarjeta"]; echo "$",$tarjeta; ?><b></h3></td> <!--Estas son tarjetas del dia-->
		<td><h3><b><?php $retiro=$reg["retiro"]; echo "$",$retiro; ?><b></h3></td> <!--Estos son retiros del dia-->
		<td><h3><b><?php $caja=$reg["caja"]; echo "$",$caja; ?><b></h3></td> <!--Esta es la caja de inicio dia-->
		<td><h3><b><?php $gastos=$reg["gastos"]; echo "$",$gastos; ?><b></h3></td> <!--Estos son gastos del dia-->

		<?php $saldo=$reg["saldo"];?> <!--Estos son los Saldos a pagar-->
		<?php $mutual=$reg["mutual"];?> 
		<td><h3><b><?php $venta=$total-$tarjeta-$retiro-$gastos-$caja-$mutual; echo "$",$venta; ?><b></h3></td> <!--Esta es la venta del dia-->
				
	</tr>
	
<?php
}
?>
	
	
</table>

<table>

	<tr height="40 "></tr>
	<tr>	<?php	include("grillameses.php");	?>	</tr>
	

</table>



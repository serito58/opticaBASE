<?php
require_once("conexion.php");
$hoy=date(Y."-".m."-".d); 
//echo $hoy;
//$elaño=date(Y);
//echo $año;
$elmes=date(F);
//echo $mes;
//$eldia=date(d);
//echo $dia;

?>

<table border="1" align="center">
	<tr>
		<td width="80" align="center" bgcolor="red"><h3><b>Mes <b></h3></td>
		<td width="100" align="center" bgcolor="red"><h3><b>Tarjetas <b></h3></td>
		<td width="100" align="center" bgcolor="red"><h3><b>Retiro <b></h3></td>
		<td width="100" align="center" bgcolor="red"><h3><b>Gastos <b></h3></td>
		<td width="100"align="center" bgcolor="red"><h3><b>Venta Total<b></h3></td>
		
	</tr>
	
<?php
$sql="SELECT year(fecha) as year, month(fecha) as mes , SUM(publico * cant) as total,
(SELECT SUM(publico * cant) from facturados where year(fecha)=year and month(fecha)=mes and producto like '%TARJETA%' ) as tarjeta,
(SELECT SUM(publico * cant) from facturados where year(fecha)=year and month(fecha)=mes and producto='RETIRO' ) as retiro,
(SELECT SUM(publico * cant) from facturados where year(fecha)=year and month(fecha)=mes and producto='CAJA' ) as caja,
(SELECT SUM(publico * cant) from facturados where year(fecha)=year and month(fecha)=mes and producto='GASTOS' ) as gastos,
(SELECT SUM(publico * cant) from facturados where year(fecha)=year and month(fecha)=mes and producto='MUTUAL' ) as mutual,
(SELECT SUM(publico * cant) from facturados where year(fecha)=year and month(fecha)=mes and producto='SALDO' ) as saldo

from facturados 
group by year(fecha),month(fecha)";
$res=mysql_query($sql,$con);


while ($reg=mysql_fetch_array($res))

{

$year=$reg["year"];
$retiro=$reg["retiro"];
$tarjeta=$reg["tarjeta"];
$total=$reg["total"];
$caja=$reg["caja"]; 
$saldo=$reg["saldo"]; 
$gastos=$reg["gastos"];
$mutual=$reg["mutual"];
?>
	
	<tr>
		<td align="center" bgcolor="yellow"><h3><b><?php echo $reg["mes"],"-$year"; ?></b></h3></td>
		
		<?php $total=$reg["total"]; ?><!--Este es el efectivo de la caja-->
		<td><h3><b><?php $tarjeta=$reg["tarjeta"]; echo "$",$tarjeta; ?><b></h3></td> <!--Estas son tarjetas del dia-->
		<td><h3><b><?php $retiro=$reg["retiro"]; echo "$",$retiro; ?><b></h3></td> <!--Estos son retiros del dia-->
		<?php $caja=$reg["caja"];?>
		<td><h3><b><?php $gastos=$reg["gastos"]; echo "$",$gastos; ?><b></h3></td> <!--Estos son gastos del dia-->

		<?php $saldo=$reg["saldo"];?> <!--Estos son los Saldos a pagar-->
		<?php $mutual=$reg["mutual"];?> 
		<td><h3><b><?php $venta=$total-$tarjeta-$retiro-$gastos-$caja-$mutual; echo "$",$venta; ?><b></h3></td> <!--Esta es la venta del dia-->
				
	</tr>
	
<?php
}
?>

</table>

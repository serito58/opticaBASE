<?php
require_once("../conexion/conexion.php");
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
		<td width="80" align="center" bgcolor="red"><h3><b>Mes/Ano <b></h3></td>
		<td width="100" align="center" bgcolor="red"><h3><b>IVA Venta <b></h3></td>
		<td width="100" align="center" bgcolor="red"><h3><b>IVA Compra <b></h3></td>
		<td width="100" align="center" bgcolor="red"><h3><b>Diferencia <b></h3></td>
		
	</tr>
	
<?php
$sql="SELECT year(facturas.fecha) as year, month(facturas.fecha) as mes , SUM(importe) as importe,
(SELECT SUM(venta) from ivaventas where year(fecha)=year and month(fecha)=mes) as venta
from facturas
where fechapago not like '%rem%'
group by year(facturas.fecha) desc,month(facturas.fecha) desc
limit 12";
$res=mysql_query($sql,$con);


while ($reg=mysql_fetch_array($res))

{

$year=$reg["year"];
$venta=$reg["venta"];
$importe=$reg["importe"];

?>
	
	<tr>
		<td align="center" bgcolor="yellow"><h3><b><?php echo $reg["mes"],"-$year"; ?></b></h3></td>
		
		<td><h3><b><?php $tarjeta=$reg["venta"]; echo "$",money_format('%i', $venta) ."\n";?><b></h3></td> 
		<td><h3><b><?php $retiro=$reg["importe"]; echo "$",money_format('%i', $importe) ."\n"; ?><b></h3></td> 
		
		<td><h3><b><?php  echo "$",$venta - $importe; ?><b></h3></td> 

		
	</tr>
	
<?php
}
?>

</table>

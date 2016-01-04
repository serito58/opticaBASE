<?php
require_once("conexion.php");

?>

<html>





<table align="center" width="800px" border="1">
 	<tr>
<td valign="top" align="center" width="100%" colspan="12">
<b>Listado de Cheques</b>
</td>
</tr>
    <tr>
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
    <tr>
 <td align="center">

<?php
$result = mysql_query("SELECT SUM(importe) as total FROM cheques where month(fechapago)=1 and pagado=''");
$row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<?php echo "$", round($row["total"],2); ?>


</td>
 <td align="center">

<?php
$result = mysql_query("SELECT SUM(importe) as total FROM cheques where month(fechapago)=2 and pagado=''");
$row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<?php echo "$", round($row["total"],2); ?>

</td>
 <td align="center">

<?php
$result = mysql_query("SELECT SUM(importe) as total FROM cheques where month(fechapago)=3 and pagado=''");
$row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<?php echo "$", round($row["total"],2); ?>

</td>
 <td align="center">

<?php
$result = mysql_query("SELECT SUM(importe) as total FROM cheques where month(fechapago)=4 and pagado=''");
$row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<?php echo "$", round($row["total"],2); ?>

</td>
 <td align="center">

<?php
$result = mysql_query("SELECT SUM(importe) as total FROM cheques where month(fechapago)=5 and pagado=''");
$row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<?php echo "$", round($row["total"],2); ?>

</td>
 <td align="center">

<?php
$result = mysql_query("SELECT SUM(importe) as total FROM cheques where month(fechapago)=6 and pagado=''");
$row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<?php echo "$", round($row["total"],2); ?>

</td>
 <td align="center">

<?php
$result = mysql_query("SELECT SUM(importe) as total FROM cheques where month(fechapago)=7 and pagado=''");
$row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<?php echo "$", round($row["total"],2); ?>

</td>
 <td align="center">

<?php
$result = mysql_query("SELECT SUM(importe) as total FROM cheques where month(fechapago)=8 and pagado=''");
$row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<?php echo "$", round($row["total"],2); ?>

</td>
 <td align="center">

<?php
$result = mysql_query("SELECT SUM(importe) as total FROM cheques where month(fechapago)=9 and pagado=''");
$row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<?php echo "$", round($row["total"],2); ?>

</td>
 <td align="center">

<?php
$result = mysql_query("SELECT SUM(importe) as total FROM cheques where month(fechapago)=10 and pagado=''");
$row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<?php echo "$", round($row["total"],2); ?>

</td>
 <td align="center">

<?php
$result = mysql_query("SELECT SUM(importe) as total FROM cheques where month(fechapago)=11 and pagado=''");
$row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<?php echo "$", round($row["total"],2); ?>

</td>
 <td align="center">

<?php
$result = mysql_query("SELECT SUM(importe) as total FROM cheques where month(fechapago)=12 and pagado=''");
$row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<?php echo "$", round($row["total"],2); ?>

</td>
    </tr>
</table>



</html>
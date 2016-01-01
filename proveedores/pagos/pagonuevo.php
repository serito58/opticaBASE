<?php
require_once("conexion.php");
//print_r($_GET);
   $ssql="select * from facturas where id_proveedor=".$_GET["id_proveedor"]." and id_pago=0 order by fecha, numfact asc limit 100";
   $result=mysql_query($ssql);
?>
<style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
</style>
<?php
$sql="SELECT `proveedores`.`id_proveedor` , `proveedores`.`proveedor` FROM `proveedores` where id_proveedor=".$_GET["id_proveedor"]."";
$res=mysql_query($sql,$con);
$reg=mysql_fetch_array($res);
$prov=$reg["proveedor"];
?>
<table width="400" align="center"><tr>
<td valign="top" align="center" width="600" colspan="6">
<h3>(<u>Pago N&ordm; <?php echo $_GET["id_pago"];?></u>) - Facturas de <u><?php echo $prov;?></u></h3>
</td></tr></table>
<form action="aver.php" method="post" name="form">
<table width="600" align="center">
<tr class="encabezado">
<td valign="top" align="center" width="50">id_factura</td>
<td valign="top" align="center" width="100">fecha</td>
<td valign="top" align="center" width="100">Num Fact</td>
<td valign="top" align="center" width="100">Importe</td>
<td valign="top" align="center" width="100">Id_pago</td>
</tr>
<?php //------------------------------------------------------------------------------------
   while ($fila=mysql_fetch_array($result)){$i++;
//print_r($i);
      echo "\n<input type=hidden name='id_fact$i' value='" . $fila["id_factura"] . "'>";
      echo "<tr>";
	  echo "<td>" . $fila["id_factura"] . "</td>";
      echo "<td>" . $fila["fecha"] . "</td>";
      echo "<td>" . $fila["numfact"] . "</td>";
      echo "<td>" . $fila["importe"] . "</td>";
      echo "<td><input type=text name='id_pago$i' value='" . $fila["id_pago"] . "'></td>";
      echo "</tr>"; 
   }
   echo "\n<tr><td colspan=2 align=center><input type='submit' value='Editar todos'></td></tr>";
   echo "\n</table>";
   echo "\n</form>";
   //es que he recibido datos de formulario, entonces tengo que recibirlos y actualizar la base de datos
 
?>

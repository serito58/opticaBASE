<?php
require_once("conexion.php");
//print_r($_POST);
   $ssql="select * from cheques where id_proveedor=".$_GET["id_proveedor"]." and id_pago=0 order by fechapago asc ";
   $result=mysql_query($ssql);
?>
<html>
<head>

<style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
</style>
<script language="javascript" type="text/javascript">
	function eliminar(id)
	{
		if (confirm("Realmente desea eliminar el registro?"))
		{
			window.location="eliminar.php?id_proveedor="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>
</head>
<body>
<?php
$sql="SELECT `proveedores`.`id_proveedor` , `proveedores`.`proveedor` FROM `proveedores` where id_proveedor=".$_GET["id_proveedor"]."";
$res=mysql_query($sql,$con);
$reg=mysql_fetch_array($res);
$prov=$reg["proveedor"];
?>
<table width="400" align="center"><tr>
<td valign="top" align="center" width="600" colspan="6">
<h3>(<u>Pago N&ordm; <?php echo $_GET["id_pago"];?></u>) - Cheques de <u><?php echo $prov;?></u></h3>
</td></tr></table>
<form action="avercheq.php" method="post" name="form">
<table width="600" align="center">
<tr class="encabezado">
<td valign="top" align="center" width="50">id_cheque</td>
<td valign="top" align="center" width="100">Num</td>
<td valign="top" align="center" width="100">Fechapago</td>
<td valign="top" align="center" width="100">Importe</td>
<td valign="top" align="center" width="100">Id_pago</td>
</tr>
<?php //------------------------------------------------------------------------------------
   $a=0;
   while ($fila=mysql_fetch_array($result))
   {$i++;
   $a++;
   ?>
   <tr class="registros"id="<?php echo "id_$a";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$a";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$a";?>','#f0f0f0')">
   <?php
//print_r($i);
      echo "\n<input type=hidden name='id_cheq$i' value='" . $fila["id_cheque"] . "'>";
      echo "<tr>";
	  echo "<td>" . $fila["id_cheque"] . "</td>";
      echo "<td>" . $fila["num"] . "</td>";
      echo "<td>" . $fila["fechapago"] . "</td>";
      echo "<td>" . $fila["importe"] . "</td>";
	  
      echo "<td><input type=text name='id_pago$i' value='" . $fila["id_pago"] . "'></td>";
      echo "</tr>"; 
   }
   echo "\n<tr><td colspan=2 align=center><input type='submit' value='Editar todos'></td></tr>";
   echo "\n</table>";
   echo "\n</form>";
   //es que he recibido datos de formulario, entonces tengo que recibirlos y actualizar la base de datos
 
?>

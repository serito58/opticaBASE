<?php
require_once("conexion.php");
$hoy=date(Y."-".m."-".d); 
?>
<html>
<head>

<table border="1">
  <tbody>
   
    <tr align="center">
      <td>DEL DIA</td>
<!--..............................TOTAL DIARIO..................................-->
      <td align="center">
<?php
$result = mysql_query("SELECT SUM(publico * cant) as total1 from facturados 
where 
fecha like '%$hoy%'");  
$row = mysql_fetch_array($result, MYSQL_ASSOC);

?>
<h3><?php echo "$", $row["total1"]; ?></h3></td>
<!--................................................................-->



    </tr>
 
  </tbody>
</table>

<h4><center>CAJA DEL DIA</center></h4>
<style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
</style>
<script language="javascript" type="text/javascript">
	function eliminar(id)
	{
		if (confirm("Realmente desea eliminar el registro?"))
		{
			window.location="eliminar2.php?id_item="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>

</head>
<TD onLoad="limpiar()">

<form action= name="form">

<table width="90%" align="center">


<tr class="encabezado" colspan="5">
<td valign="top" align="center" width="50">
Fecha
</td>
<td valign="top" align="center" width="50">
Flia
</td>
<td valign="top" align="center" width="25">
Cant
</td>
<td valign="top" align="center" width="200">
Producto
</td>
<td valign="top" align="center" width="50">
Publico
</td>
<td valign="top" align="center" width="50">
Subtot
</td>
<td valign="top" align="center" width="100">
Proveedor
</td>
<td valign="top" align="center" width="25">&nbsp;
</td>
<td valign="top" align="center" width="25">&nbsp;
</td>

</tr>

<?php


$sql="select * from facturados 
where
fecha like '%$hoy%'
order by fecha asc";
$res=mysql_query($sql,$con);

while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">



<td valign="top" align="left" width="50">
<?php

echo $reg["fecha"];
?>
</td>
<td valign="top" align="left" width="50">
<?php
echo chao_tilde($reg["familia"]);
?>
</td>
<td valign="top" align="center" width="25">
<?php
echo chao_tilde($reg["cant"]);
?>
</td>
<td valign="top" align="left" width="200">
<?php
echo chao_tilde($reg["producto"]);
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo $reg["publico"];
?>
</td>
<td valign="top" align="center" width="50">
<?php
echo $reg["publico"] * $reg["cant"];
?>
</td>
<td valign="top" align="center" width="100">
<?php
echo $reg["proveedor"];
?>
</td>

<td valign="top" align="center" width="25">
<a href="modificar.php?id_item=<?php echo $reg["id_item"];?>" title="Modificar"><img src="ima/editar.png" border="0"></a>
</td>
<td valign="top" align="center" width="25">
<a href="javascript:void(0)" title="Eliminar" onClick="eliminar('<?php echo $reg["id_item"];?>')"><img src="ima/eliminar.png" border="0"></a>
</td>

</tr>


<?php
}
?>

</table>

</form>
</body>
</html>


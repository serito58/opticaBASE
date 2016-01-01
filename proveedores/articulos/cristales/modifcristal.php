<?php
require_once("../conexion/conexion.php");

$sql="select count(*) as cuantos,
FROM 'cristal'
nombre like '%".$_GET["s"]."%' order by producto asc";
//echo $sql;
$res=mysql_query($sql,$con);
if ($reg=mysql_fetch_array($res))
{
	$total=$reg["cuantos"];
}
$resto=$total % 5;
$ultimo=$total-$resto;

//****************************************************************
if (isset($_GET["pos"]))
{
	$inicio=$_GET["pos"];
}else
{
	$inicio=0;
}
$sql=" UPDATE cristal2
SET nombre = '%".$_GET["nombre2"]."%' where '%".$_GET["nombre"]."%'
and 
SET tipo = '%".$_GET["tipo2"]."%' where '%".$_GET["tipo"]."%'
and
SET material = '%".$_GET["material2"]."%' where '%".$_GET["material"]."%'
and 
SET color = '%".$_GET["color2"]."%' where '%".$_GET["color"]."%'
and
SET tratamiento = '%".$_GET["tratamiento2"]."%' where '%".$_GET["tratamiento"]."%'

limit $inicio,100
";
$res=mysql_query($sql,$con);

?>


<html>
<head>
<title>
Modificar Cristales
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
			window.location="eliminar.php?id_cristal="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>
</head>
<BODY OnLoad="document.buscador.nombre.focus();">
<table  align="center">
<tr>
	<td valign="top" align="center"  colspan="9">
	<h3>Modificar Cristales</h3>
	</td>
</tr>

<!--ac� va el div menu-->
<div align="center" class="buscador">
<form name="buscador" method="get" action="resultadosadm.php">

<tr class="encabezado">
<td valign="top" align="center" width="250">
Nombre
</td>
<td valign="top" align="center" width="50">
Tipo
</td>
<td valign="top" align="center" width="50">
Material
</td>
<td valign="top" align="center" width="50">
Color
</td>	
<td valign="top" align="center" width="50">
Tratamiento
</td>

</tr>

 <tr align="left" colspan="5">
     <td> <input name="nombre" type="text"> </td>
     <td> <input name="tipo" type="text"> </td>
     <td> <input name="material" type="text"> </td>
     <td> <input name="color" type="text"> </td>
     <td> <input name="tratamiento" type="text"></td>
     <td valign="top" align="center" >&nbsp;</td>

	 <td>

	 <tr align="left" colspan="5">
     <td> <input name="nombre2" type="text"> </td>
     <td> <input name="tipo2" type="text"> </td>
     <td> <input name="materia2l" type="text"> </td>
     <td> <input name="color2" type="text"> </td>
     <td> <input name="tratamiento2" type="text"></td>
     <td valign="top" align="center" >&nbsp;</td>

	 <td>
	 	<a href="javascript:void(0)" title="Buscar" onClick="document.buscador.submit();">
		<img src="../ima/lupa.png" width="30" height="30" border="1">
		</a>
	 </td>

     <td valign="top" align="center" >&nbsp;</td>

	
</tr>
</form>


<?php

$i=0;
while ($reg=mysql_fetch_array($res))
{
$i++;
?>
<tr class="registros"id="<?php echo "id_$i";?>" style="background-color:#f0f0f0" onmousemove="cambiar('<?php echo "id_$i";?>','#cccccc')" onmouseout="cambiar('<?php echo "id_$i";?>','#f0f0f0')">



<?php
}
?>

</table>
</body>
</html>

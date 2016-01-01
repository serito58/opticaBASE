<?php require_once("../conexion/conexion.php");
$sql="select count(*) as cuantos,
FROM 'cristal'nombre like '%".$_GET["s"]."%' order by producto asc";
//echo $sql;$res=mysql_query($sql,$con);
if ($reg=mysql_fetch_array($res)){
	$total=$reg["cuantos"];}
$resto=$total % 5;$ultimo=$total-$resto;
//****************************************************************
if (isset($_GET["pos"])){
	$inicio=$_GET["pos"];}else
{	$inicio=0;
}$sql="SELECT *
FROM cristal
where 
nombre like '%".$_GET["nombre"]."%' 
and (tipo like '%".$_GET["tipo"]."%'
and material like '%".$_GET["material"]."%'
and color like '%".$_GET["color"]."%'
and tratamiento like '%".$_GET["tratamiento"]."%')order by publico asc, nombre asc
limit $inicio,100";
$res=mysql_query($sql,$con);

?><html>
  <head>
    <meta content="text/html; charset=windows-1252" http-equiv="content-type">
    <title> Listado de Articulos </title>
    <style type="text/css">
	.encabezado{ background-color:#666666; color:#FFFFFF; font-weight:bold}
	.registros{ background-color:#f0f0f0}
</style> <script language="javascript" type="text/javascript">
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
  <body onload="document.buscador.s.focus();">
   
    <div class="buscador" align="center">
      <form name="buscador" method="get" action="resultadosadm.php"></form>
    </div>
    <table align="center" width="1400">
      <!--ac� va el div menu-->
      <tbody>
        <tr>
          <td> <input size="32" name="nombre" type="text"> </td>
          <td> <input name="tipo" type="text"> </td>
          <td> <input name="material" type="text"> </td>
          <td> <input name="color" type="text"> </td>
          <td> <input name="tratamiento" type="text"></td>
         </tr>
        <!--ac� va el div menu-->
        <tr class="encabezado">
          <td align="center" valign="top" width="250"> Nombre </td>
          <td align="center" valign="top" width="50"> Tipo </td>
          <td align="center" valign="top" width="50"> Material </td>
          <td align="center" valign="top" width="50"> Color </td>
          <td align="center" valign="top" width="50"> Tratamiento </td>
          <td align="center" valign="top" width="50"> Costo </td>
          <td align="center" valign="top" width="50"> Publico </td>
          <td align="center" valign="top" width="50"> Multi </td>
          <td align="center" valign="top" width="100"> Proveedor </td>
          <td align="center" valign="top" width="50"> Fecha </td>
          <td align="center" valign="top" width="25">&nbsp; </td>
          <td align="center" valign="top" width="25">&nbsp; </td>
        </tr>
        <?php //$sql="select * from proveedores order by proveedor asc";
//$res=mysql_query($sql,$con);$i=0;while ($reg=mysql_fetch_array($res)){
$i++;?>
        <tr class="registros" id="&lt;?php echo " id_$i";?="">
          <?php echo "id_$i";?><?php echo "id_$i";?>
          <td align="left" valign="top" width="250">
            <?php echo $reg["nombre"];
?><br> </td>
          <td align="center" valign="top" width="50">
            <?php echo $reg["tipo"];
?><br> </td>
          <td align="left" valign="top" width="50">
            <?php echo $reg["material"];
?><br> </td>
          <td align="left" valign="top" width="50">
            <?php echo $reg["color"];
?><br> </td>
          <td align="left" valign="top" width="50">
            <?php echo $reg["tratamiento"];
?><br> </td>
          <td align="center" valign="top" width="50">
            <?php echo "$ ",$reg["costo"];
?><br> </td>
          <td align="center" valign="top" width="50">
            <?php echo "$ ", round($reg["publico"],2);
?><br> </td>
          <td align="center" valign="top" width="50">
            <?php echo round($reg["publico"]/$reg["costo"],2);
?><br> </td>
          <td align="center" valign="top" width="100">
            <?php echo $reg["proveedor"];
?><br> </td>
          <td align="center" valign="top" width="50">
            <?php echo $reg["fecha"];
?><br> </td>
          <td align="center" valign="top" width="25"> <a href="modificar.php?id_cristal=%3C?php%20echo%20$reg["
              id_cristal"];?="">" title="Modificar"&gt;<img src="../ima/editar.png"
                border="0"></a> </td>
          <td align="center" valign="top" width="25"> <a href="javascript:void(0)"
              title="Eliminar" onclick="eliminar('<?php echo $reg[" id_cristal"];?="">')"&gt;<img
                src="../ima/eliminar.png" border="0"></a> </td>
        </tr>
        <?php }
?> </tbody>
    </table>
  </body>
</html>

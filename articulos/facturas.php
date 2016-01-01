<?php
require_once("conexion/conexion.php");
//print_r($_GET);
$sql="select * from facturas where id_proveedor=".$_GET["id"]."";
$res=mysql_query($sql,$con);
?>

Facturas:
<select name="facturas" onchange="from(document.form.facturas.value,'articulos','articulos.php')">
<OPTION value="0">Seleccione la factura</OPTION>

<?php
while($reg=mysql_fetch_array($res))
{
?>
<OPTION value="<?php echo $reg["id_proveedor"];?>"><?php echo $reg["numfact"];?></OPTION>

<?php
}
?>

</select>


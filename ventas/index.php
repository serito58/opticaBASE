<?php
require_once("conexion.php");

?>
<html>

<head onload="document.form.text.focus()">
<title>
VENTA de Articulos
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
			window.location="eliminar.php?id_item="+id;
		}
	}
	function cambiar(id,color)
	{
		document.getElementById(id).style.backgroundColor=color;
	}
</script>
</head>

<BODY OnLoad="document.buscador.s.focus();">
<center><h3><strong>VENTA de Articulos</strong></h3></center>
<!--acá va el div menu-->
<div align="center" class="buscador">
<form name="buscador" method="get" action="resultados.php">
<input type="text" name="s">
<a href="javascript:void(0)" title="Buscar" onClick="document.buscador.submit();">
<img src="ima/lupa.png" width="24" height="24" border="0">
</a>
</form>
</div>
<!--acá va el div menu-->


<hr>
<div id="select">

<?php
include ("select.php");

?>

</div>

</body>
</html>

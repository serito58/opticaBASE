<?php
//print_r($_get);
?>

<html>
<head>
<title>Agregar Lista</title>
<script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>

<body onLoad="limpiar()">
<form action="add.php" method="post" name="form">
<table align="center" width="400">
<tr>
<td valign="top" align="center" width="400" colspan="2">
<h3>Agregar Lista</h3>
</td>
</tr>


<tr>
<td align="right" valign="top" width="200">
Fecha.
</td>
<td valign="top" align="left" width="200">
<input type="text" name="fec" />
</td>
</tr>


<input type="hidden" name="id_pro" value="<?=$_GET["id_proveedor"]?>" />

</tr>



<tr>
<td valign="top" align="center" width="400" colspan="2">
<input type="button" value="Volver" title="Volver" onclick="history.back();" />
&nbsp;&nbsp;||&nbsp;&nbsp;
<input type="button" value="Ingresar Lista" title="Ingresar Lista" onclick="document.form.submit()" />
</td>
</tr>

</table>
</form>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta content="text/html; charset=ISO-8859-1" http-equiv="content-type" /><title>clien</title></head>
<body>


<table border="1" cellpadding="2" cellspacing="2" height="454" width="1069">
  <tbody>
    <tr>
      <td colspan="1" rowspan="2" valign="top">
      <div id="cliente">cliente
	<iframe src=".index.php" width="800" height="241" FRAMEBORDER="0" scrolling="auto" ></iframe>
	</div>
      </div>
      </td>
      <td valign="top">
      <div id="recetas">recetas
	<?php
	include (./recetas/index.php);
	?>
	</div>
      </td>
    </tr>
    <tr>
      <td valign="top">
      <div id="detalle">detalles
	</div>
      </td>
    </tr>
  </tbody>
</table>

  <br />
</body>
</html>
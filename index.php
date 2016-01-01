<?php 
    /*  
  
    Este es un programa desarrollado bajo el concepto de Software Libre y Uds.,
	pueden modificarlo y redistribuirlo bajo los terminos de la GNU General 
	Public License como ha sido publicado por Free Software Foundation;
	ya sea bajo la Licencia version 2 o cualquier Licencia posterior.

    	
	Autores: Ignacio Albacete
			 Pedro Obreg�n Mej�as
			 Rub�n D. Mancera Mor�n
	
	Fecha Liberaci�n del c�digo: 15/10/2007
	Codeka 2007 -- Murcia	
	
	Este codigo ha sido modificado parcialmente por
	
	Fecha Liberaci�n del c�digo: 28/08/2010
	Grupo  CodeKa Mx --- Mexico , Chile
	                     Manuel Avalos
	                     Arturo Fertilio
						 Helio Trincado 	 
	
	*/


include("conexion/conexion.php");

?>

<html>

<head>

  <title>Optica LAURENZ Web</title>

  <script language="JavaScript" src="menu/JSCookMenu.js"></script>

  <link rel="stylesheet" href="menu/theme.css" type="text/css">

  <script language="JavaScript" src="menu/theme.js"></script>

  <script language="JavaScript">

  



var MenuPrincipal = [

	
	
	[null,'CLIENTES',null,null,'clientes',

		[null,'Base Nueva','./clientes/frames.php','principal','Nueva'],

		[null,'Base Vieja','./vieja/frames.php','principal','Vieja'],

		[null,'Cumple hoy','./cumple/index.php','principal','Cumple'],

	],

	[null,'CRISTALES','./proveedores/articulos/cristales/resultados.php?nombre=','principal','Cristales',

	],

	[null,'PEDIDOS',null,null,'Pedidos',

		[null,'PENDIENTES','./pedidos/pendientes/resultados.php?s=','principal','Pedidos'],

		[null,'PEDIDOS COMPLETO','./pedidos/resultados.php?s=','principal','Pedidos']


	],
	[null,'STOCK',null,null,'STOCK',

		[null,'Articulos','./proveedores/articulos/index.php','principal','Articulos'],

		[null,'Marcas','proveedores/marcas.php','principal','Marcas'],
	],

	[null,'VENTAS',null,null,'ventas ',

		[null,'Ventas Mostrador','./ventas/index.php','principal','Ventas Mostrador'],

		[null,'Caja Diaria','./ventas/diaria.php','principal','Facturas'],
	],

	[null,'Copias Seguridad',null,null,'Copias de Seguridad',
		[null,'Hacer copia','backup.php','principal','Hacer copia'],
		[null,'Restaurar copia','./backup/restaurarbak.php','principal','Restaurar copia'],
	],
	



];



</script>

  <style type="text/css">


 #masthead	{font-size:2em;
  		color:#000000;
		background-color:#a9d1ff;
		padding:0.5em;
		
		text-align:center;
		}


  #MenuAplicacion { margin-left: 10px;

    margin-top: 0px;

    }





  </style>

</head>

<body>

<div id="masthead">OPTICAL Web</a></div>

<div id="MenuAplicacion" align="center">

</div>



<script language="JavaScript">

<!--





	cmDraw ('MenuAplicacion', MenuPrincipal, 'hbr', cmThemeGray, 'ThemeGray');

-->

</script>

<iframe src="central2.php" name="principal" title="principal" width="100%" height="1050px" frameborder=0 scrolling="yes" style="margin-left: 0px; margin-right: 0px; margin-top: 2px; margin-bottom: 0px;"></iframe>

</body>

</html>


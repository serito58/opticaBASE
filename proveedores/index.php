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

		[null,'Base Nueva','../clientes/frames.php','principal','Nueva'],

		[null,'Base Vieja','vieja/frames.php','principal','Vieja'],

	],

	
	[null,'CRISTALES','./articulos/cristales/resultadosadm.php?s=','principal','Cristales',

	],

	[null,'PEDIDOS',null,null,'Pedidos',

		[null,'PENDIENTES','../pedidos/pendientes/resultados.php?s=','principal','Pedidos'],

		[null,'PEDIDOS COMPLETO','../pedidos/resultados.php?s=','principal','Pedidos']


	],
	[null,'PROVEEDORES',null,null,'Proveedores',
		
		[null,'Proveedores','./frames.php','principal','Proveedores'],


		[null,'Pedidos sin recibir','./viajantes/sinrecibir.php','principal','Pedidos sin recibir'],

		[null,'Ver Facturas','./profacturas/index.php','principal','Ingresar Facturas'],

		[null,'Ingresar Facturas','./profacturas/agregar.php','principal','Ingresar Facturas'],

		[null,'Ver todas las Facturas','./profacturas/todas.php','principal','Ver todas las Facturas'],

		[null,'Pagos','./pagos/index.php','principal','Pagos '],

		[null,'Cheques','./cheques/index.php','principal','Cheques'],
	],
	[null,'STOCK',null,null,'STOCK',

		[null,'Articulos','../proveedores/articulos/indexadm.php','principal','Articulos'],

		[null,'Familias','../proveedores/familias/index.php','principal','Familias'],
		
		[null,'Marcas','../proveedores/marcas.php','principal','Marcas'],
	],

	[null,'VENTAS',null,null,'ventas ',

		[null,'Ventas Mostrador','../ventas/index.php','principal','Ventas Mostrador'],

		[null,'Caja Diaria','../ventas/diaria.php','principal','Caja Diaria'],

		[null,'Resumen Mensual','../ventas/grilla.php','principal','Caja Mes'],
		
		[null,'Ventas del Dia','../ventas/resumen.php','principal','Caja Dia'],

		[null,'Ventas del Mes','../ventas/mes.php','principal','Caja Mensual'],

	],

	[null,'IMPUESTOS',null,null,'IMPUESTOS',
		[null,'Ingresar Z diaria','../impuestos/index.php','principal','Ingresar Z Diaria'],
		[null,'IVA Compras/Ventas','../ventas/iva.php','principal','Ingreso Facturacion'],
		[null,'IVA Resumen','../impuestos/impuestos.php','principal','Resumen IVA'],
		[null,'Ingresar Facturas Ventas','../impuestos/talonarios/talonarios.php','principal','Ingresar Facturas Ventas'],
	],

	[null,'Copias Seguridad',null,null,'Copias de Seguridad',
		[null,'Hacer copia','../backup.php','principal','Hacer copia'],
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


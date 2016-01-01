// Desarrollado por www.cesarcancino.com
//*****************************************************************************
//Valida correo
function valida_correo(correo) {
		  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
		 }
//*************************************************************************************************************************************
//valida n�meros
function valida_numero(numero)
{
if (!/^([0-9])*$/.test(numero)){
		return false;
}else{
		return true;
	}
}
//*******************************************************************************************************
//funci�n para validar cadenas de solo letras
function valida_cadena(texto)
	{
		var RegExPattern = "[1-9]";
		 if (texto.match(RegExPattern))
		 {
		 	return false;
		 }else
		 {
		 	return true;
		 }
	}
//************************************************************
function limpiar()
{
	document.form.reset();
	document.form.fam.focus();
}

function validar()
{
	var form =document.form;
	if (form.pro.value==0)
	{
		alert("ingrese el Proveedor");
		form.pro.value="";
		form.pro.focus();
		return false;
	}
	if (form.via.value==0)
	{
		alert("ingrese el Viajante");
		form.via.value="";
		form.via.focus();
		return false;
	}
	if (form.dir.value==0)
	{
		alert("ingrese la direccion");
		form.dir.value="";
		form.dir.focus();
		return false;
	}	
	if (form.cp.value==0)
	{
		alert("ingrese el CP");
		form.cp.value="";
		form.cp.focus();
		return false;
	}
	if (form.tel.value==0)
	{
		alert("ingrese el telefono");
		form.tel.value="";
		form.tel.focus();
		return false;
	}
	if (form.correo.value==0)
	{
		alert("ingrese el E-Mail");
		form.correo.value="";
		form.correo.focus();
		return false;
	}
	if (valida_correo(form.correo.value)==false)
	{
		alert("ingrese un E-Mail correcto");
		form.correo.value="";
		form.correo.focus();
		return false;
	}
	document.form.submit();
}


//*******************************************************************************************************
//función para validar ingreso de clientes
function validar2()
{
	var form =document.form;
	if (form.dn.value==0)
	{
		alert("ingrese el DNI");
		form.dn.value="";
		form.dn.focus();
		return false;
	}
	if (form.nom.value==0)
	{
		alert("ingrese el Nombre");
		form.nom.value="";
		form.nom.focus();
		return false;
	}
	if (form.dir.value==0)
	{
		alert("ingrese la direccion");
		form.dir.value="";
		form.dir.focus();
		return false;
	}	
	if (form.ciu.value==0)
	{
		alert("ingrese la Ciudad");
		form.ciu.value="";
		form.ciu.focus();
		return false;
	}
	if (form.tel.value==0)
	{
		alert("ingrese el telefono");
		form.tel.value="";
		form.tel.focus();
		return false;
	}
	if (form.correo.value==0)
	{
		alert("ingrese el E-Mail");
		form.correo.value="";
		form.correo.focus();
		return false;
	}
	if (valida_correo(form.correo.value)==false)
	{
		alert("ingrese un E-Mail correcto");
		form.correo.value="";
		form.correo.focus();
		return false;
	}
	document.form.submit();
}


//*******************************************************************************************************
//funci�n para validar ingreso de recetas
function validar3()
{
	var form =document.form;
	if (form.fec.value==0)
	{
		alert("ingrese la fecha");
		form.fec.value="";
		form.fec.focus();
		return false;
	}
	if (form.doc.value==0)
	{
		alert("ingrese el Dr.");
		form.doc.value="";
		form.doc.focus();
		return false;
	}
	if (form.rec.value==0)
	{
		alert("ingrese la receta");
		form.rec.value="";
		form.rec.focus();
		return false;
	}	
	
	document.form.submit();
}


//*******************************************************************************************************
//función para validar modif listas
function validarmodiflista()
{
	var form =document.form;
	if (form.fec.value==0)
	{
		alert("ingrese la fecha");
		form.fec.value="";
		form.fec.focus();
		return false;
	}
	
	document.form.submit();
}

//*******************************************************************************************************
//función para validar ingreso de listas
function validaringlista()
{
	var form =document.form;
	if (form.fec.value==0)
	{
		alert("ingrese la fecha");
		form.fec.value="";
		form.fec.focus();
		return false;
	}
	
		
	
	document.form.submit();
	window.location='../index.php';
}

//*******************************************************************************************************
//función para validar ingreso de items a las listas


function validaritemlista()
{
	var form =document.form;
	if (form.fam.value==0)
	{
		alert("ingrese la familia");
		form.fam.value="";
		form.fam.focus();
		return false;
	}
	
		
	
	document.form.submit();
	history.back();
}


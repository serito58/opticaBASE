<?php
$con=mysql_connect("localhost","root","123456");
$bd=mysql_select_db("optica");


//******************************************************************
function saludo()
{
	echo "hola mundo";
}
//*************************************************************
//Convierto los acentos a HTML
function chao_tilde($entra)
{
$traduce=array( '�' => '&aacute;' , '�' => '&eacute;' , '�' => '&iacute;' , '�' => '&oacute;' , '�' => '&uacute;' , '�' => '&ntilde;' , '�' => '&Ntilde;' , '�' => '&auml;' , '�' => '&euml;' , '�' => '&iuml;' , '�' => '&ouml;' , '�' => '&uuml;');
$sale=strtr( $entra , $traduce );
return $sale;
}

?>



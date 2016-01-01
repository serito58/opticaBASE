<?php
$con=mysql_connect("localhost","root","123456");
mysql_select_db("optica");
//*************************************************************

//Convierto los acentos a HTML

function chao_tilde($entra)

{

$traduce=array( 'á' => '&aacute;' , 'é' => '&eacute;' , 'í' => '&iacute;' , 'ó' => '&oacute;' , 'ú' => '&uacute;' , 'ñ' => '&ntilde;' , 'Ñ' => '&Ntilde;' , 'ä' => '&auml;' , 'ë' => '&euml;' , 'ï' => '&iuml;' , 'ö' => '&ouml;' , 'ü' => '&uuml;');

$sale=strtr( $entra , $traduce );

return $sale;

}
?>

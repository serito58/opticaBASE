*/
function fecha(){

/*OBTENGO LA CADENA QUE REPRESENTA EL DIA PERO EN INGLES*/
$dia=date("l");
if ($dia=="Monday") $dia="Lunes";
if ($dia=="Tuesday") $dia="Martes";
if ($dia=="Wednesday") $dia="Miércoles";
if ($dia=="Thursday") $dia="Jueves";
if ($dia=="Friday") $dia="Viernes";
if ($dia=="Saturday") $dia="Sabado";
if ($dia=="Sunday") $dia="Domingo";

/*EL NUMERO DEL DIA*/
$dia2=date("d");

/*OBTENGO EL STRING DEL MES*/
$mes=date("F");
if ($mes=="January") $mes="Enero";
if ($mes=="February") $mes="Febrero";
if ($mes=="March") $mes="Marzo";
if ($mes=="April") $mes="Abril";
if ($mes=="May") $mes="Mayo";
if ($mes=="June") $mes="Junio";
if ($mes=="July") $mes="Julio";
if ($mes=="August") $mes="Agosto";
if ($mes=="September")$mes="Setiembre";
if ($mes=="October") $mes="Octubre";
if ($mes=="November") $mes="Noviembre";
if ($mes=="December") $mes="Diciembre";

/*FINALMENTE EL AÑO*/
$ano=date("Y");

/*RETORNAMOS LA FECHA ENTERA*/
return "$dia $dia2 de $mes del $ano";

}


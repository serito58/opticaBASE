<?php

require_once("conexion/conexion.php");
$hoy=date("d-m-Y H:i:s");
echo $hoy;


//echo date("d-m-Y H:i:s");

echo "Su base esta siendo salvada.......";
system("mysqldump --host=localhost --user=root --password=123456 optica > '".$hoy."'optica.sql");
echo "Fin. Puede recuperar la base por FTP";


?>



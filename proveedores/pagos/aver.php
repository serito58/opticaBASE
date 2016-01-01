

<?php

require_once("conexion.php");
//print_r($_POST);


 for ($i=1;$i<=200;$i++){
     
      	//print_r($i);
         //es que este registro estaba en el formulario
         $ssql = "update facturas set 
         id_pago='".$_POST["id_pago".$i]."'
         
          where id_factura='".$_POST["id_fact".$i]."'";
		 $res=mysql_query($ssql,$con);
      
   }
?>



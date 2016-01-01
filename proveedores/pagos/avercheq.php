

<?php

require_once("conexion.php");
//print_r($_POST);


 for ($i=1;$i<=200;$i++){
     
      	//print_r($i);
         //es que este registro estaba en el formulario
         $ssql = "update cheques set 
         id_pago='".$_POST["id_pago".$i]."'
         
          where id_cheque='".$_POST["id_cheq".$i]."'";
		 $res=mysql_query($ssql,$con);
      
   }
?>



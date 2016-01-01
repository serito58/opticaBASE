<?
require_once("conexion.php");
//print_r($_GET);

$sql="select * from factemp";
$res=mysql_query($sql,$con); 



?>


<div align="center">Que cantidad?

<input type="text" name="vendi">

<script type="text/javascript">
document.getElementById('vendi').focus();
</script>


</div>



<?php

while ($reg=mysql_fetch_array($res))
{

$sql="UPDATE `optica`.`factemp` SET `vendi` = 'vendi' WHERE `factemp`.`id_item` =$reg["id_item"]";
$res=mysql_query($sql,$con); 

}
?>
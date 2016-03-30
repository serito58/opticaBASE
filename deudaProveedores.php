<?php
 /* Ejemplo 1 generando excel desde mysql con PHP
    @Autor: Carlos Hernan Aguilar Hurtado
 */
 

 $conexion = mysql_connect ("localhost", "root", "123456");
 mysql_select_db ("optica", $conexion);    
 $sql = "SELECT cheques.num, cheques.fechapago, cheques.importe, proveedores.proveedor
from cheques, proveedores
where cheques.id_proveedor=proveedores.id_proveedor
and cheques.fechapago >= '2016-01-01'
order by fechapago asc";
 $resultado = mysql_query ($sql, $conexion) or die (mysql_error ());
 $registros = mysql_num_rows ($resultado);
 
 if ($registros > 0) {
   require_once 'Classes/PHPExcel.php';
   $objPHPExcel = new PHPExcel();
   
   //Informacion del excel
   $objPHPExcel->
    getProperties()
        ->setCreator("ingenieroweb.com.co")
        ->setLastModifiedBy("ingenieroweb.com.co")
        ->setTitle("Exportar excel desde mysql")
        ->setSubject("Ejemplo 1")
        ->setDescription("Documento generado con PHPExcel")
        ->setKeywords("ingenieroweb.com.co  con  phpexcel")
        ->setCategory("ciudades");    

   $i = 1;    
   while ($registro = mysql_fetch_object ($resultado)) {
       
      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i, $registro->num);
      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('B'.$i, $registro->fechapago);
      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('C'.$i, $registro->importe);
      $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('D'.$i, $registro->proveedor);        
      $i++;
      
   }
}
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="ejemplo1.xlsx"');
header('Cache-Control: max-age=0');

$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
$objWriter->save('php://output');
exit;
mysql_close ();
?>
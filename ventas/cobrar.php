    <?php
     //Gracias  a emecumene de delphiaccess
       require_once("conexion.php");
       
       //Variable donde cargaremos todos los campos
       $campos['ventas'] = array();
       $sql = "select * from factemp order by id_item asc";
       $res = mysql_query($sql,$con);
       
       //cargamos todos los datos en el array
       while ($reg = mysql_fetch_array($res))
       {  
          $campos['ventas'][] = array(
             'id' => $reg['id'],
             'familia' => $reg['familia'],
             'cantidad' => $reg['cant'],
             'producto' => $reg['producto'],
             'publico' => $reg['publico'],
             'vendido' => $reg['vendi'],
             'proveedor' => $reg['proveedor'],
             'venta' => $reg['cant'] - $reg['vendi'],
          );
       }
       
       //cerramos la coneccion dado que ya no lo necesitamos
       //porque los datos ya estan en memoria en el array
       mysql_close($res);
       
       //ahora actualizamos e insertamos los datos
       //Esto se puede hacer de otra forma usando MVC
       //que es separar cada cosa en su lugar a modo de funciones.
       foreach($campos['ventas'] as $det)
       {
          echo $det['id'] . "<br />" .
              $det['familia'] . "<br />" .
              $det['cantidad'] . "<br />" .
              $det['producto'] . "<br />" .
              $det['publico'] . "<br />" .
              $det['vendido'] . "<br />" .
              $det['proveedor'] . "<br />" .
              $det['venta'] . "<br />";
       
          $update_sql = "update det_fact set cant = " . $det['venta'] . " WHERE id_item = " . $det['id'];
          $update_res = mysql_query($update_sql,$con);
          printf ("Actualizados: %d\n", mysql_affected_rows());
          mysql_close($update_res);
          
          $insert_sql = "insert into facturados values
                    (null,null,'".$det['familia']."','".$det['vendido']."','".$det['producto']."','".$det['publico']."','".$det['proveedor']."')";
          $insert_res = mysql_query($insert_sql,$con);
          printf ("Insertados: %d\n", mysql_affected_rows());
          mysql_close($insert_res);
       }
       

//<!--vacia la tabla factemp-->


$sql="truncate factemp";
$res=mysql_query($sql,$con);
echo "<script type=''>
	window.location='index.php';
</script>";


    ?>

 <?php 

require_once("../conexion/conexion.php");
# utilicemos whiles anidados para construir una tabla de 
$filas=5; $columnas=3;
# insertemos la etiqueta de apertura de la tabla
print ("<table border=1 width=400 align=center>");
# un primer while rojo utilizando como condición que filas sea mayor que cero
# en este caso, la variable tendrá que disminuyendo su valor con $filas--
# para escribir las etiquetas  y  
# y el modificador de la variable filas
# y un segundo while (magenta) para insertar las etiquetas correspondientes
# a las celdas de cada fila

while ($filas>0):
##################################################################
# ESTA ES LA MODIFICACION RESPECTO AL EJEMPLO ANTERIOR

# Recuerda que $variable % 2 lo que hace es devolvernos el resto
# de la división de la variable entre dos
# Cuando el valor de $filas sea PAR el resto de la división será 0
# y en ese caso, ponemos a la fila color amarillo mediante bgcolor=#ffff00
# cuando $filas sea IMPAR el resto será 1
# en ese caso diremos que el color de la fila sea bgcolor=#ff0000

    if ($filas % 2==0){
    echo "<tr bgcolor='#ffff00'>";
}else{
    echo "<tr bgcolor='#ff0000'>";
}
# AQUI ACABA LA MODIFICACIÓN
####################################################################
    $filas--;
    while ($columnas>0):
        echo "<td>";
        print "fila: ".$filas." columna: ".$columnas;
        print ("</td>");
        $columnas--;
    endwhile;
/* muy importante tendremos que reasignar a la variable columnas
      su valor inicial para que pueda ser utilizado en la proxima fila
      ya que el bucle (magenta) va reduciendo ese valor a cero
      y en caso de no restaurar el viejo valor no volvería a ejecutarse
      ya que no cumple la condición de ser mayor que cero */
    $columnas=3;
    echo "</TR>";
endwhile;
# por ultimo la etiqueta de cierre de la tabla
print "</table>";
?> 
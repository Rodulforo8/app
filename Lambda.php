<?php 

include "conexion.php";

    
$sql=mysqli_query($link,"select balance_general from balance_general");

while($row = mysqli_fetch_array($sql)) {
$tipo="$row[balance_general]";
}
echo $tipo;

?>
<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='Augmented Reality';
$CON=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($CON){
    echo"connection successful";
}
else{
    die(mysqli_error($CON));
}
?>
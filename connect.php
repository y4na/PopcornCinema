<?php
$connection = new mysqli('localhost', 'root', '', 'dbparagosof2');

if(!$connection){
    die (mysqli_error($mysqli));
}

?>
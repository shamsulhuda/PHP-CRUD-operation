<?php 
$connection = mysqli_connect('localhost', 'root', '');
if(!$connection){
    die("Connection lost". mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'php_crud'); 
if(!$select_db){
    die("Database connection failed". mysqli_error($connection));
}
?>
<?php require_once('Database/config.php'); 

include "inc/header.php";
?>

<?php

$id = $_GET['id'];

$delData = "DELETE FROM `crud` WHERE id = $id";

$res = mysqli_query($connection, $delData);

if($res){
    header('location: view.php');
}
else{
    echo "Woops! Something is wrong.";
}

?>

<?php include "inc/footer.php"; ?>
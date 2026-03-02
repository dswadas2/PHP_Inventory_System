<?php
$pid = $_GET['pid'];

include('../connections/db.php');

$sql = "DELETE FROM products WHERE pid = $pid";
$results = $conn->query($sql);

if($results == TRUE){
    header('Location: ../dashboard.php');
}else{
    echo "Error";
}

?>
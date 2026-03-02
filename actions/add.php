<?php
$productname    =   $_POST['product_name'];
$productprice   =   $_POST['product_price'];
$productqty     =   $_POST['product_qty'];

include('../connections/db.php');

$sql = "INSERT INTO products (product_name, product_price, product_qty) VALUES ('$productname', '$productprice', '$productqty')";

$results = $conn->query($sql);

if($results == TRUE){
    header("Location: ../dashboard.php");
}else{
    echo "Error";
}


?>
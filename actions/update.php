<?php
include('../connections/db.php');

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_qty = $_POST['product_qty'];

$sql = "UPDATE products SET product_name='$product_name', product_price='$product_price', product_qty='$product_qty' WHERE pid='$product_id'";

$results = $conn->query($sql);

if($results == TRUE){
    header('Location: ../dashboard.php');
}else{
    echo "error";
}


?>
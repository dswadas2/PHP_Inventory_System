<head>
    <title>Inventory System</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<?php include('connections/db.php'); ?>

<?php
function sumofdata($number1, $number2){
    echo $number1 + $number2;
}

function productQuery($productName){
    include('connections/db.php');

    $functionQuery = "SELECT * FROM products WHERE product_name = '$productName'";
    $functionResults = $conn->query($functionQuery);
    while($functionData = $functionResults->fetch_assoc()){
        echo "The price for ".$productName." : " . $functionData['product_price'];
    }
}

function barChart($nquery){
    include('connections/db.php');

    $graphSQL = "SELECT * FROM inventory_forecast WHERE finalCount <= $nquery ";
    $graphResults = $conn->query($graphSQL);
    global $monthData;
    global $countData;
    while($rowData = $graphResults->fetch_assoc()){
        $monthData .= "'" . $rowData['month'] . "', ";
        $countData .= $rowData['finalCount'] . ", ";
    }
}
?>
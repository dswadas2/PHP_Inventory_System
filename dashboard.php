<html>
    <?php include('includes/header.php'); ?>
    <body>
        <h2>Product Listing</h2>

        <a href="add_product.php">Add Product</a>

        <?php
        $sql = "SELECT * FROM products";
        $results = $conn->query($sql);

        echo "<table id='productTable' border='1'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Product ID</th>";
        echo "<th>Product Name</th>";
        echo "<th>Product Price</th>";
        echo "<th>Product Quantity</th>";
        echo "<th>Actions</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row = $results->fetch_assoc()){
            echo "<tr>";
            echo "<td>". $row['pid'] ."</td>";
            echo "<td>". $row['product_name'] ."</td>";
            echo "<td>". $row['product_price'] ."</td>";
            echo "<td>". $row['product_qty'] ."</td>";
            echo "<td><a href='actions/edit.php?pid=".$row['pid']."&productname=".$row['product_name']."&productprice=".$row['product_price']."&productqty=".$row['product_qty']."'>Edit</a> | <a href='actions/delete.php?pid=".$row['pid']."'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>
        <?php include('includes/footer.php'); ?>
    </body>
</html>
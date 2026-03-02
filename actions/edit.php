<html>
    <head>
        <title>Inventory System</title>
    </head>
    <?php include('../connections/db.php'); ?>

    <?php 
    $pid = $_GET['pid']; 
    $productname = $_GET['productname']; 
    $productprice = $_GET['productprice']; 
    $productqty = $_GET['productqty']; 
    
    ?>

    <body>
    <h1>Edit Product</h1>

    <form action="update.php" method="post">
        <input type="hidden" value="<?php echo $pid; ?>" name="product_id" />
        <input type="text" value="<?php echo $productname; ?>" name="product_name" placeholder="Product Name"/>
        <input type="number" value="<?php echo $productprice; ?>" name="product_price" placeholder="Product Price"/>
        <input type="number" value="<?php echo $productqty; ?>" name="product_qty" placeholder="Product Quantity"/>
        <input type="submit" value="submit" name="submit" />
    </form>

    <?php include('../includes/footer.php'); ?>
    </body>
</html>
<html>
    <?php include('includes/header.php'); ?>
    <body>
    <h1>Add New Product</h1>

    <form action="actions/add.php" method="post">
        <input type="text" name="product_name" placeholder="Product Name"/>
        <input type="number" name="product_price" placeholder="Product Price"/>
        <input type="number" name="product_qty" placeholder="Product Quantity"/>
        <input type="submit" value="submit" name="submit" />
    </form>

    <?php include('includes/footer.php'); ?>
    </body>
</html>
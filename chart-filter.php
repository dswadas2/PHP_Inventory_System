<html>
    <?php include('includes/header.php'); ?>
    
    <body>
        <h2>Chart Listing</h2>

        <form action="" method="get">
            <input type="text" value="" name="product_query">
            <input type="submit" value="submit">
        </form>

        <?php 
        if(isset($_GET['product_query'])){
            $varProd = $_GET['product_query'];
        }else{
            $varProd = '';
        }

        productQuery($varProd); 
        
        ?>

        <?php //sumofdata(8,5); ?>

        <div style="width: 700px;">
            <canvas id="myChartBar"></canvas>
        </div>

        <form action="" method="get">
            <input type="text" value="" name="bar_query">
            <input type="submit" value="submit">
        </form>


        <?php 
        if(isset($_GET['bar_query'])){
            $barProd = $_GET['bar_query'];
        }else{
            $barProd = 500;
        }

        barChart($barProd); 
        ?>
        <script>
            const barchart = document.getElementById('myChartBar');

            new Chart(barchart, {
                type: 'bar',
                data: {
                labels: [<?php echo $monthData; ?>],
                datasets: [{
                    label: 'Mouse Inventory',
                    data: [<?php echo $countData; ?>],
                    borderWidth: 1
                }]
                },
                options: {
                scales: {
                    y: {
                    beginAtZero: true
                    }
                }
                }
            });
        </script>

        <?php
            $querySql = "SELECT * FROM inventory_forecast";
            $queryresults = $conn->query($querySql);
            $sumFinalCount = 0;

            echo "<table border='1'>";
            while($data = $queryresults->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $data['productName'] . "</td>";
                echo "<td>" . $data['month'] . "</td>";
                echo "<td>" . $data['finalCount'] . "</td>";
                echo "</tr>";

                $sumFinalCount += $data['finalCount'];
            }
            $meanofsum =  $sumFinalCount / $queryresults->num_rows;
            echo "<tr>";
            echo "<td></td>";
            echo "<td>Mean</td>";
            echo "<td>". round($meanofsum, 2) ."</td>";
            echo "</tr>";
            echo "</table>";

            
        
        ?>
        <?php include('includes/footer.php'); ?>
    </body>
</html>
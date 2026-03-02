<html>
    <?php include('includes/header.php'); ?>
    
    <body>
        <h2>Chart Listing</h2>

        <?php
        $sql = "SELECT * FROM inventory_forecast";
        $results = $conn->query($sql);

        echo "<table id='productTable' border='1'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Forecast ID</th>";
        echo "<th>Product Name</th>";
        echo "<th>Month</th>";
        echo "<th>Quantity</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row = $results->fetch_assoc()){
            echo "<tr>";
            echo "<td>". $row['fid'] ."</td>";
            echo "<td>". $row['productName'] ."</td>";
            echo "<td>". $row['month'] ."</td>";
            echo "<td>". $row['finalCount'] ."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>

        <div style="width: 500px;">
            <canvas id="myChartBar"></canvas>
        </div>

        <div style="width: 500px;">
            <canvas id="myChartLine"></canvas>
        </div>

        <?php
            $graphSQL = "SELECT * FROM inventory_forecast";
            $graphResults = $conn->query($graphSQL);
            $monthData = '';
            $countData = '';
            while($rowData = $graphResults->fetch_assoc()){
                $monthData .= "'" . $rowData['month'] . "', ";
                $countData .= $rowData['finalCount'] . ", ";
            }

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

        <script>
            const linechart = document.getElementById('myChartLine');

            new Chart(linechart, {
                type: 'line',
                data: {
                labels: [<?php echo $monthData; ?>],
                datasets: [{
                    label: 'Mouse Inventory',
                    data: [<?php echo $countData; ?>],
                    borderWidth: 1
                }]
                },
                options: {
                    responsive: true,
                    plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Line Chart'
                    }
                }
             }
            });
        </script>
    </body>
</html>
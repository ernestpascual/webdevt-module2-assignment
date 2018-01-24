<html>
<head>
<title>Yardie Restaurant </title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/yardie.css">
</head>

<body class="yardie-bg-color">
<div class="wrapper yardie-adjust">
    <p></p>
</div>
<div class = " container yardie-reciept-paper"> 
    <!-- Header adjust -->
 <div class = "yardie-receipt">
    <div class="row">
        <div class = "col-md-3">
        </div>
        <div class="col-md-12">
                <p class="yardie-headspace"></p>
                <p class="yardie-header-adj">
                <h1> Yardie Restaurant </h1>
                <p>
                <p class="yardie-receipt">
                THE HOLE ONE INC 
                </p>
                <p class="yardie-receipt">
                106 Estbs St., Logi Village
                </p>
                <p class="yardie-receipt">
                City of Maketi
                </p>
                <p class="yardie-date yardie-adjust">
                January 25, 2018 10:00:03 AM
                </p>
        </div>
 </div>

    <!-- Declare PHP declarations and calculations -->
    <?php
    // constants
    $hamburger = 100;
    $chocomilkshake = 75;
    $cola = 50;
    $evat = 0.12;

    //calculation
    $thamburger = $hamburger * 2;
    $totalcost  = ($hamburger * 2) + $chocomilkshake + $cola;
    $tax = $totalcost * $evat;
    $total = $tax + $totalcost 
    ?>
    <div class="row">
        <div class="col-md-12">
            <table class="yardie-table-adj">
            <thead>
            <tr>
            <th>Item</th>
            <th>Quantity</th>
            <th>Price  </th>
            </tr>
            </thead>
            <tbody>
            <?php
                echo "<tr>";
                echo "<td> Hamburger @ Php 100.00 </td>";
                echo "<td>2</td>";
                echo "<td>Php " . $thamburger . ".00</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Choco Milkshake @ Php 75.00</td>";
                echo "<td>1</td>";
                echo "<td>Php " . $chocomilkshake. ".00</td>";
                echo "</tr>";
                echo "<td>Cola @ Php 50.00</td>";
                echo "<td>1</td>";
                echo "<td>Php " . $cola . ".00</td>";
                echo "</tr>";
                echo "<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr>";
                echo "<td><b>Before Tax:</b></td><td></td>";
                echo "<td>Php " . $totalcost . ".00</td></tr>";
                echo "<tr><td><b>12% EVAT:</b></td><td></td>";
                echo "<td>Php " . $tax . ".00</td></tr>";
                echo "<tr><td><b>Total Cost:</b></td><td></td>";
                echo "<td>Php " . $total . ".00</td></tr>";
                echo "<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>";
                
            ?>
            </tbody>
            </table>
        </div>  
    </div>
</div>
</div>
</div>
</body>
</html>


<!-- TO DO 
* put all calculations in the first declaration  DONE
* call our variables in table using php echoing table formatting DONE
* align the table to center DONE
* adjust receipt paper, put shadow
-->
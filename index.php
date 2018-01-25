<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
	$vhamburger = $thamburger * $evat;
	$vchoco = $chocomilkshake * $evat;
	$phamburger = $thamburger - $vhamburger;
	$pchoco = $chocomilkshake - $vchoco;
	$vcola = $cola * $evat;
	$pcola = $cola - $vcola;
        $totalcost  = ($hamburger * 2) + $chocomilkshake + $cola;
	$evatt = $vhamburger + $vchoco + $vcola;
	$btax = $phamburger + $pchoco + $pcola;
        $total = $evatt + $btax;
    ?>
    <div class="row">
        <div class="col-md-12">
            <table class="yardie-table-adj table table-border no-border">
            <thead>
            <tr>
            <th>Item</th>
			<th>Price</th>
            <th>Quantity</th>
			<th>EVAT</th>
            <th>Pre-tax</th>
			<th>Total</th>
            </tr>
            </thead>
            <tbody>
            <?php

                echo "<tr><td> Hamburger</td><td>Php 100.00</td><td>2</td><td>Php ". number_format((float)$vhamburger,2,'.','') ."</td><td>Php ". number_format((float)$phamburger,2,'.','')
					 ."</td><td>Php ". number_format((float)$thamburger,2,'.','')."</td></tr>";     
		echo "<tr><td> Chocolate Milkshake</td><td>Php 75.00</td><td>1</td><td>Php ". number_format((float)$vchoco,2,'.','') ."</td><td>Php ". number_format((float)$pchoco,2,'.','')
					 ."</td><td>Php ". number_format((float)$chocomilkshake,2,'.','')."</td></tr>";
                echo "<tr><td> Chocolate Milkshake</td><td>Php 75.00</td><td>1</td><td>Php ". number_format((float)$vcola,2,'.','') ."</td><td>Php ". number_format((float)$pcola,2,'.','')
					 ."</td><td>Php ". number_format((float)$cola,2,'.','')."</td></tr>";   
                echo "<tr><td></td></tr>";    
                echo "<tr><td> </td><td> </td><td ></td><td> </td><td><b>Pre Tax:</b></td>";
                echo "<td>Php " . number_format((float)$btax,2,'.','') . "</td></tr>";               
                echo "<tr><td> </td><td> </td><td> </td><td> </td><td><b>EVAT:</b></td>";
                echo "<td>Php " .number_format((float)$evatt,2,'.',''). "</td></tr>";                
                echo "<tr><td></td><td></td><td></td><td></td><td><b>Grand Total:</b></td>";
                echo "<td>Php " .number_format((float)$total,2,'.','') . "</td></tr>";
                
         
                
                
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



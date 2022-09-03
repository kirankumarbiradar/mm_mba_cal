
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>mba4</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .bs-example{
        margin: 20px;
    }
</style>
</head>
<h1 style align="center">calculation</h1>
<body>
    <?php
    $itemArr=$_POST['name'];
    $previ = $itemArr[0];
    $lot_size = floatval($_POST['lotsize_value']);
    $margin_bal = floatval($_POST['Initial_value']);
    $mm_value = floatval($_POST['mm_value']);
    
    if ($_POST['Initial_value_per_amt']=="per_iv"){
                $margin_bal = floatval($previ)*$lot_size*$margin_bal/100;
            }
    if ($_POST['marginal_value_per_amt']=="per_mm"){
                $mm_value = $margin_bal*$mm_value/100;
            }
    
    echo "Initial Marginal = ".$margin_bal ."::  Maintenance Margin = ".$mm_value."::  Lot Size=".floatval($_POST['lotsize_value']);
    ?>
<div class="bs-example">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Future Price</th>
                <th> Daily Gain/Loss </th>
                <th>Cumilative Gain/Loss</th>
                <th>Margin Balance</th>
                <th> Margin Call </th>
            </tr>
        
        <?php
            echo"
        <thead >
        <tr>";
            
            $itemArr=$_POST['name'];
            $no = 0;
            $cum_gain = 0;
            $previ = $itemArr[0];
            $lot_size = floatval($_POST['lotsize_value']);
            $margin_bal = floatval($_POST['Initial_value']);
            $mm_value = floatval($_POST['mm_value']);
            
            
             if ($_POST['Initial_value_per_amt']=="per_iv"){
                $margin_bal = floatval($previ)*$lot_size*$margin_bal/100;
                 $reset_mbal = $margin_bal;
            }
    if ($_POST['marginal_value_per_amt']=="per_mm"){
                $mm_value = $margin_bal*$mm_value/100;
            }
            
  foreach($itemArr as $list){
      $no +=1; 
      $a =  floatval($list) - $previ ;
      $previ = floatval($list);
      $a = $a * $lot_size;
      $cum_gain += $a;
      $margin_bal += $a;
      echo"<th>$no</th>";
      echo"<th>$list</th>";
      if ($no > 1){
          echo "<th>$a</th>
          <th>$cum_gain</th>        
        ";
          
      }else{
          echo"<th> </th>
          <th></th>
          ";
      }
        
      if  ($margin_bal < $mm_value){
                $temp = $reset_mbal - $margin_bal;
                echo "<th>$margin_bal</th>
                <th>$temp</th>";
                $temp = 0;
                $margin_bal = $reset_mbal;
      }else{
          echo"<th>$margin_bal</th>
          <th> </th>
          ";
          
      }
        echo"
            </tr>
            ";}
            echo"</thead>";
        ?>
        </thead>
        <tbody>
        </tbody>
</table>
    </div></body></html>
  
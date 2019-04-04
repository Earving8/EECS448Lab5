<?php
$user = $_POST["user"];
$pass = $_POST["pass"];
$tamt = $_POST["tireAmt"];
$famt = $_POST["frisbeeAmt"];
$damt = $_POST["donutAmt"];
$shipping = $_POST["shipping"];
if($shipping == "oneDay"){
    $costShipping = 50.00;
    $shipping = "Overnight Shipping";
}else if($shipping == "threeDay"){
    $costShipping = 5.00;
    $shipping = "Three Day Shipping";
}else{
    $costShipping = 0;
    $shipping = "Seven Day Shipping";
}
$costTire = $tamt * 129.99;
$costFrisbee = $famt * 12.99;
$costDonut= $damt * 1.29;
$cost =  $costTire + $costFrisbee + $costDonut + $costShipping;


echo  "<link href='style.css' rel='stylesheet' type='text/css'> <div class='ReceiptScreen'>Welcome, $user<br> Your password is: $pass
<table class='receipt'>
    <tr>
        <th></th>
        <th>Quantity</th>
        <th>Cost Per Item</th>
        <th>Sub Total </th>
    </tr>
    <tr>
        <th>Tire</th>
        <td>$tamt</td>
        <td>$129.99</td>
        <td>$$costTire</td>
    </tr>
    <tr>
        <th>Frisbee</th>
        <td>$famt</td>
        <td>$12.99</td>
        <td>$$costFrisbee</td>
    </tr>
    <tr>
        <th>Donut</th>
        <td>$damt</td>
        <td>$1.29</td>
        <td>$$costDonut</td>
    </tr>
    <tr>
        <th>Shipping</th>
        <td colspan='2'>$shipping</td>
        <td>$$costShipping</td>
    </tr>
    <tr>
        <th colspan='3'>Total Cost</th>
        <th>$$cost</th>
    </tr>
</table>
</div>";
?>
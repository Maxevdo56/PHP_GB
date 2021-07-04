<?php

session_start();
$productindex = $_POST['product_ID'];
$_SESSION['cart'][$productindex] = $_SESSION['cart'][$productindex] + 1;
var_dump($_SESSION['cart']);


//$_SESSION['cart'][$productindex] = ($_SESSION['cart'][$_POST['product_ID']] + 1);

//$productID = $_GET['productID'];
//var_dump($productID);
//header('Location: /product.php?productID='.$productID);
die;

?>
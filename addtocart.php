<?php

session_start();
$_SESSION['cart'][] = $_POST['productID'];
var_dump($_SESSION);
//$productID = $_GET['productID'];
//var_dump($productID);
//header('Location: /product.php?productID='.$productID);
die;

?>
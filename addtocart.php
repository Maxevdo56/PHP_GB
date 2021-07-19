<?php
ob_start();
session_start();
$productindex = $_POST['product_ID'];
$_SESSION['cart'][$productindex] = $_SESSION['cart'][$productindex] + 1;
var_dump($_SESSION['cart']);
header('Location: /cart.php');
die;
?>
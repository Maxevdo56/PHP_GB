<?php
session_start();
$productindex = $_POST['product_ID'];
if (NULL != $_SESSION['cart'][$productindex]) {
    $_SESSION['cart'][$productindex] = $_SESSION['cart'][$productindex] - 1;
} 
header('Location: /cart.php');
die;

?>
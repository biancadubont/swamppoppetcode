<?php
require_once('includes/cart.php');
session_start();

if(isset($_SESSION['userid'])==true){
  header('Location:login.php');
}


$oCart = $_SESSION['cart'];
$iProductId = $_GET['productid'];
$oCart->remove($iProductId);

//////redirect to shopping cart////

header('Location: showcart.php?' . $_GET['productid']);

?>
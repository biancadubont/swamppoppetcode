<?php
require_once('includes/cart.php');
session_start();

if(isset($_SESSION['userid'])==false){
  header('Location:login.php');
}


$oCart = $_SESSION['cart'];
$iPetId = $_GET['productid'];
$oCart->add($iPetId);

//////redirect to shopping cart////

header('Location: showcart.php');

?>
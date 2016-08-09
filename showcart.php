<?php
ob_start();
require_once('includes/cart.php');
session_start();

require_once('includes/header.php');

if(isset($_SESSION['userid'])==false){
 	header('Location:login.php');
}
 $oCart = $_SESSION ['cart'];

 //print_r($oCart);

 echo View::renderCart($oCart);
// echo View::renderCheckoutbutton
?>


<?php
require_once('includes/footer.php');
?>
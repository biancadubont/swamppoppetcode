<?php

ob_start();

session_start();

if(isset($_SESSION['userid']) == false){

	header('Location: login.php');
}
require_once('includes/header.php');
require_once('includes/user.php');

$iUserId=$_SESSION['userid'];

$oUser = new User();

$oUser->load($iUserId);

 echo View::renderUserDetails($oUser);

require_once('includes/footer.php');
?>
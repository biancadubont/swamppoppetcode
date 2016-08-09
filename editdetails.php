<?php
/////////CONTROLLER///////
ob_start();
session_start();



if(isset($_SESSION['userid'])== false){
	header('Location: login.php');
}
require_once('includes/header.php');
require_once('includes/form.php');
require_once('includes/user.php');

$iUserId = $_SESSION['userid'];

$oUser = new User();
$oUser->load($iUserId);

$aStickyData = [];
$aStickyData['first_name']=$oUser->sFirstName;
$aStickyData['last_name']=$oUser->sLastName;
$aStickyData['password']=$oUser->sPassword;
$aStickyData['address']=$oUser->sAddress;
$aStickyData['telephone']=$oUser->sTelephone;
$aStickyData['email']=$oUser->sEmail;

$oForm = new Form();
$oForm->aData = $aStickyData;

//print_r($oForm);

if(isset($_POST['submit'])==true){

	$oUser->sFirstName = $_POST['first_name'];
	$oUser->sLastName = $_POST['last_name'];
	$oUser->sPassword = $_POST['password'];
	$oUser->sAddress = $_POST['address'];
	$oUser->sTelephone = $_POST['telephone'];
	$oUser->sEmail = $_POST['email'];

	$oUser->save();

	header('Location: userdetails.php');

}
$oForm->open();
$oForm->makeInputField('First Name', 'first_name');
$oForm->makeInputField('Last Name', 'last_name');
$oForm->makeInputField('Password', 'password');
$oForm->makeInputField('Address', 'address');
$oForm->makeInputField('Telephone', 'telephone');
$oForm->makeInputField('Email', 'email');
$oForm->makeSubmit('Update', 'submit');
$oForm->close();

?>

<div class="signupform">
<h1>Edit Details</h1>

<?php
echo $oForm->sHTML;
?>



<?php 

require_once('includes/footer.php');

 ?>
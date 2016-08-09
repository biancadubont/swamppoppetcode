<?php
require_once ('includes/header.php');
require_once ('includes/product.php');
require_once ('includes/form.php');


$oForm = new Form();

if(isset($_POST['submit']) == true ){

	$aFileDetails = $_FILES['photo'];

	
	$sNewName = time() .$aFileDetails['name'];



	$to = dirname("."). '/assets'.$sNewName;

	
move_upload_file($aFileDetails['tmp_name'],$to);
$oProduct = new Product();
$oProduct->iId = $_POST['id'];
$oProduct->sName = $_POST['name'];
$oProduct->sDescription = $_POST['description'];
$oProduct->sPrice = $_POST['price'];
$oProduct->sPhoto = $sNewName;
$oProduct->iTypeId = $_POST['type_id'];
$oProduct->save();

header('Location: main.php?typeid' .$oProduct->iTypesId);

}
 	$oForm->open();


 	$oForm->makeInputField('Name','name');
	$oForm->makeInputField('Description','description');
	$oForm->makeInputField('Price','price');
	$oForm->makeFileInput('Photo','photo');
	$oForm->makeSelectInput('Product Type','type_id',TypeManager::listTypes());

	// $oForm->makeSelectInput('Product Type','type_id',['1'=>'oils', '2'=>'poitions']);

	$oForm->makeSubmit('Add Product', 'submit');
	$oForm->close();


?>
<div class="signupform">
<h1 class="featurette-heading">Add New Product</h1>

<?php echo $oForm->sHTML;?>

</div>

<?php
require_once('includes/footer.php');

?>

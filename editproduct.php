<?php
/////////CONTROLLER///////
ob_start();

require_once('includes/header.php');

require_once('includes/product.php');
require_once('includes/form.php');

$iCurrentProduct = 4;


if(isset($_GET['productid']) == true){
	$iCurrentPet = $_GET ['productid'];
}

$oPet = new Product();
$oPet->load($iCurrentProduct);

///////MAKE STICKY DATA FORM///////////

	$aStickyData = [];
	$aStickyData['name'] = $oProduct->sName;
	$aStickyData['description'] = $oProduct->sDescription;
	$aStickyData['price'] = $oProduct->sPrice;
	$aStickyData['photo'] = $oProduct->sPhoto;
	$aStickyData['type_id'] = $oProduct->iTypeId;

	$oForm = new Form();
	$oForm->aData = $aStickyData; 

	if (isset($_POST['submit']) == true){

		$oProduct->sName = $_POST['name'];
		$oProduct->sDescription = $_POST['description'];
		$oProduct->sPhoto = $_POST['photo'];
		$oProduct->iTypeId = $_POST['type_id'];

		$oProduct->save();

		header('Location:main.php?typeid='.$oProduct->iTypeId);

	}

	$oForm->open();
	//first parameter in brackets will be label 
		//second parameter in brackets tends to be named same as db

	$oForm->makeInputField('Name', 'name');
	$oForm->makeInputField('Description', 'description');
	$oForm->makeInputField('Price', 'price');
	$oForm->makeInputField('Photo', 'photo');
	$oForm->makeInputField('Product Type (4 or 6)', 'type_id');

	$oForm->makeSubmit('Update', 'submit');

		$oForm->close();
	

?>

      <!-- Slider 2 --> 
        <div class="signupform">
        <h1>Edit Product</h1>

        <?php echo $oForm->sHTML; ?>
        
            
        </div>

	        <div class="container">

	        </div>
        </div>

<?php 

require_once('includes/footer.php');

 ?>

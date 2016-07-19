<?php
require_once('connection.php');

class Product{
	public $iId;
	public $sName;
	public $sDescription;
	public $sPrice;
	public $sPhoto;
	public $iTypeId;


	public function __construct(){

		$this->iId = 0;
		$this->sName = '';
		$this->sDescription = '';
		$this->sPrice = '';
		$this->iTypeId = 0;

}
 public function load ($iId){

 	$oConnection = new Connection();

 	$sSQL = 'SELECT id,name, description, price, photo,type_id 
 	FROM products WHERE id =' .$oConnection->escape($iId);

 	$oResultSet = $oConnection->query($sSQL);

 	$aRow = $oConnection->fetch($oResultSet);


 		$this->iId = $aRow['id'];
		$this->sName =$aRow ['name'];
		$this->sDescription = $aRow['description'];
		$this->sPrice = $aRow['price'];
		$this->sPhoto = $aRow['photo'];
		$this->iTypeId = $aRow['type_id'];



 }
public function save(){

		//make connection

		$oConnection = new Connection(); 

		//generate insert query 
		if($this->iId == 0){

		$sSQL = "INSERT INTO product (description,name, price, photo, type_id) VALUES 
		('".$oConnection->escape($this->sDescription)."',
		'".$oConnection->escape($this->sName)."', 
		'".$oConnection->escape($this->sPrice)."', 
		'".$oConnection->escape($this->sPhoto)."', 
		'".$oConnection->escape($this->iTypeId)."')";

		// echo $sSQL;

		// execute query 

		$bSuccess = $oConnection->query($sSQL); 

		//check for successful connection 

		//get id from db 
		if($bSuccess == true){
			$this->iId = $oConnection->getInsertId(); 

		}
		///////yellow database white model///////

	}else{

		//remember to adjust the collumns
		$sSQL = "UPDATE product
			SET name ='".$oConnection->escape($this->sName)."', 
			description = '".$oConnection->escape($this->sDescription)."', 
			price = '".$oConnection->escape($this->sPrice)."',
			photo = '".$oConnection->escape($this->sPhotos)."', 
			type_id = '".$oConnection->escape($this->sTypeid)."' 
			WHERE id = ".$oConnection->escape($this->iId);

			//echo $sSQL;

			$oConnection->query($sSQL); 

		}
	}                                                                                                                                                                                                                                          
}

// test
// $oProduct = new Product();
// $oProduct->load(5);

// echo '<pre>';
// print_r($oProduct);
// echo '</pre>';



?>
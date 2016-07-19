<?php
require_once('connection.php');
require_once('product.php');

class Type{
	public $iId;
	public $sTypeName;
	public $sTypeDescription;
	public $aProducts;

	public function __construct(){
		$this->iId = 0;
		$this->sTypeName = '';
		$this->sTypeDescription = '';
		$this->aProducts = [];
	}

	public function load($iId){

		$oConnection = new Connection();

		$sSQL= 'SELECT id, type_name,type_description 
		 FROM types WHERE id ='.$oConnection->escape($iId);

		 //echo $sSQL;

		 $oResultSet = $oConnection->query ($sSQL);

		 $aRow = $oConnection->fetch($oResultSet);

		 $this->iId = $aRow['id'];
		 $this->sTypeName = $aRow['type_name'];
		 $this->sTypeDescription = $aRow['type_description'];


		 ///////close connection here


		 $sSQL = 'SELECT id
		  FROM products 
		  WHERE type_id =' .$oConnection->escape($iId);

		  // echo $sSQL

		  $oResultSet = $oConnection->query($sSQL); 

		//fetch pet id's from result set 
		while($aRow=$oConnection->fetch($oResultSet)){
			$iProductId = $aRow['id'];

			$oProduct = new Product();
			$oProduct->load($iProductId); 
			$this->aProducts[] = $oProduct;


		}

	}
}


// $oType= new Type();
// $oType->load(4);

// echo '<pre>';
// print_r($oType);
// echo '</pre>';




?>
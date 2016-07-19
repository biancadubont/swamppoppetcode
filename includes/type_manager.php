<?php 

require_once('connection.php');
require_once('type.php');

class TypeManager{

	//no data, a shell class 

	static public function getTypes(){

		$aTypes=[];

		$oConnection = new Connection();

		//query type ids
		$sSQL = 'SELECT id FROM types';

		$oResultSet = $oConnection->query($sSQL); 

		//load each subject for each id 
		while($aRow = $oConnection->fetch($oResultSet)){
			$iTypeId = $aRow['id'];

			$oType = new Type();
			$oType->load($iTypeId);
			$aTypes[] = $oType; //add type to list 
		}

		return $aTypes;
	}

	static public function listTypes(){

		$aTypes=[];

		$oConnection = new Connection();

		//query type ids
		$sSQL = 'SELECT id,type_name
				 FROM types';

		$oResultSet = $oConnection->query($sSQL); 

		//load each subject for each id 
		while($aRow = $oConnection->fetch($oResultSet)){

			$iTypeId = $aRow['id'];

			$aTypes[$iTypeId] = $aRow ['type_name']; //add type to list 
		}

		return $aTypes;

	}
}


// echo '<pre>';
// print_r(TypeManager::getTypes());
// echo '</pre>';

// ?>

<?php
require_once('connection.php');

class User{

	public $iId;
	public $sUserName;
	public $sPassword;
	public $sFirstName;
	public $sLastName;
	public $sAddress;
	public $sTelephone;
	public $sEmail;
	public $sAdmin;
	//public $aErrors;

	public function __construct(){
		$this->iId = 0;
		$this->sUserName = '';
		$this->sPassword = '';
		$this->sFirstName ='';
		$this->sLastName = '';
		$this->sAddress = '';
		$this->sTelephone ='';
		$this->sEmail = '';
		$this->sAdmin = '';
		
	}

	public function save (){

		$oConnection = new Connection();

		if($this->iId == 0){
		$sSQL = "INSERT INTO users (username, password, first_name, last_name, address, telephone, email, admin) 
			VALUES ('".	$oConnection->escape($this->sUserName)."', '".
						$oConnection->escape($this->sPassword)."', '".
						$oConnection->escape($this->sFirstName)."', '".
						$oConnection->escape($this->sLastName)."', '".
						$oConnection->escape($this->sAddress)."', '".
						$oConnection->escape($this->sTelephone)."', '".
						$oConnection->escape($this->sEmail)."', '".
						$oConnection->escape($this->sAdmin)."')";

						// echo $sSQL;

						$bSuccess = $oConnection->query($sSQL);

						if($bSuccess == true){
							$this->iId = $oConnection->getInsertId();	
						}
							}else{

		$sSQL = "UPDATE users 
			SET first_name ='".$this->sFirstName."', 
			last_name = '".$this->sLastName."', 
			password = '".$this->sPassword."',
			address = '".$this->sAddress."', 
			telephone = '".$this->sTelephone."', 
			email = '".$this->sEmail."' 
			WHERE id = ".$this->iId;

			echo $sSQL;

			$oConnection->query($sSQL);                                                                                                                                                                                                                                             
	}
}
	public function load ($iId){
		$oConnection = new Connection ();

		$sSQL= "SELECT id, username, password, first_name, last_name,telephone, address,email, admin 
				FROM users
				WHERE id=".$iId;


				$oResultSet = $oConnection->query($sSQL);
				$aRow = $oConnection->fetch($oResultSet);

				if ($aRow==true);

				$this->iId = $aRow['id'];
				$this->sUserName = $aRow['username'];
				$this->sPassword = $aRow['password'];
				$this->sFirstName = $aRow['first_name'];
				$this->sLastName = $aRow['last_name'];
				$this->sAddress = $aRow['address'];
				$this->sTelephone = $aRow['telephone'];
				$this->sEmail = $aRow['email'];
	}
	public function  loadByUsername($sUserName){

		$oConnection = new Connection();

		$sSQL = "SELECT id,username, password, first_name, last_name, address,telephone, email
			   FROM users 
			   WHERE username ='".$oConnection->escape($sUserName)."'";

			   $oResultSet = $oConnection->query($sSQL);

			   $aRow = $oConnection->fetch($oResultSet);

			   if($aRow==true){
			   	$this->iId = $aRow['id'];
			   	$this->sUserName = $aRow['username'];
			   	$this->sPassword = $aRow['password'];
			   	$this->sFirstNmae = $aRow['first_name'];
			   	$this->sLastName = $aRow['last_name'];
			   	$this->sAddress = $aRow['address'];
			   	$this->sTelephone = $aRow['telephone'];
			   	$this->sEmail = $aRow['email'];

			   	return true;


			  }else{

			   	return false;
		
			}	
	
	}

}


//


//  $oUser = new User();
// $oUser->sFirstName = 'Steph';
// $oUser->sLastName = 'Hi';
// $oUser->sAddress = 'Hi';
// $oUser->sTelephone = 'Hi';
// $oUser->sEmail = 'Hi';
// $oUser->sAdmin = 'no';

// $oUser->save();

// echo '<pre>';
// print_r($oUser);
//  echo '</pre>';
 // testing is done 

?>
<?php
class Form{

	public $sHTML;
	public $aData;
	public $aErrors;

	public function __construct(){
		$this->sHTML = '';
		$this->aData = [];
		$this->aErrors = [];
	}

	public function open(){
		$this->sHTML .= '<form action="" method="post" class="signup contact">
                <fieldset class="contact-inner">';


	}

	public function close(){
		$this->sHTML .= '</form>';
	}

	public function makeTextInput($sLabel, $sInputName){
		$sData = '';

		if(isset($this->aErrors[$sInputName])==true){
			$sData = $this->aData[$sInputName];
		}

		$sError = '';
		if(isset($this->aErrors[$sInputName])==true){
			$sError = $this->aErrors[$sInputName];
		}

		$this->sHTML .='
		<p class="contact-input">
		<input type="text" name="'.$sInputName.'" placeholder="'.$sLabel.'" autofocus>
		</p>
		';

		///do i need a value here too? 

		$this->sHTML .= '<p>' .$sError. '</p>';
	}

	// public function makeFileInput($sLabel, $sInputName){
	// 	$sError = '';
	// 	if(isset($this->aErrors[$sInputName])==true){
	// 		$sError = $this->aErrors[$sInputName];
	// 	}

	// 	$this->sHTML .= '<input type="text" name="'.$sInputName.'" placeholder="'.$sLabel.'" autofocus>';

 //        $this->sHTML .='<p>' .$sError. '</p>';
	// }

	public function makeSubmit($sLabel, $sInputName){
		$this->sHTML .= '<p class="contact-submit, signup">'.$sLabel.'<input type="submit" name ="'.$sInputName.'" value="Sign up">';
		// /Above is this correct? //
	}

	// public function makeSelectInput($sLabel, $sInputName, $aOptions){
	// 	$sData = '';
	// 	if(issets($this->aData[$sInputName])==true){
	// 		$sData = $this->aErrors[$sInputName];
	// 	}

	// 	$this->sHTML .= '<input type="text" name="'.$sInputName.'" placeholder="'.$sLabel.'" autofocus>';
	// }
	// foreach is this needed here?

	///////Have is missed anything here? 
 		// $this->sHTML .= '<p>' .$sError. '</p>';

}


   
   ?>
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

	public function makeInputField($sLabel, $sInputName, $sType){
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
		<input type="' . $sType . '" name="'.$sInputName.'" placeholder="'.$sLabel.'" value="'.$sData.'" autofocus required>
		</p>
		';

		///do i need a value here too? 

		$this->sHTML .= '<p>' .$sError. '</p>';
	}


	public function makeSubmit($sLabel, $sInputName){
		$this->sHTML .=	'<p class="contact-submit, signup"><input type="submit" name ="'.$sInputName.'" value="' .$sLabel.'"></p>';
		// /Above is this correct? //
	}

	public function makeSelectInput($sLabel, $sInputName, $aOptions){
		$sData = '';
		if(issets($this->aData[$sInputName])==true){
			$sData = $this->aErrors[$sInputName];
		}

		$this->sHTML .= '<input type="text" name="'.$sInputName.'" placeholder="'.$sLabel.'" autofocus>';
	}
	
}
	// /////Have is missed anything here? 
 // 		$this->sHTML .= '<p>' .$sError. '</p>';

	// public function addError($sInputName;$sErrorMessage){

	// 	if(isset($this->aErrors[$sInputName])==true){
	// 		$sError = $this->aErrors[$sInputName];



   
   ?>
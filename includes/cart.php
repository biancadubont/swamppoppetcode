<?php
class Cart{
	public $aContents;
	public function __construct(){
		$this->aContents = [];
	}
	public function add($iProductId){
		if(isset($this->aContents[$iProductId])== false)
			$this->aContents[$iProductId]== 1;
				}else{

					$this->aContents[$iProductId] ++;
		}
}

public function remove ($iProductId){

	$this->aContents[$iProductId] --;

	if($this->aContents[$iProductId]<=0){
		unset ($this->aContents[$iProductId]);
	}
	
}

?>
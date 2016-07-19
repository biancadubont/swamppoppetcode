<?php
class View{

	static public function renderNav($aTypes){
		$sHTML =' <ul class="nav navbar-nav">
                    <li>
                        <img src="assets/splogoblksmall.jpg" alt="#">
                    </li>
                    <li>
                        <a href="indexabout.html">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>';


                for($i=0; $i<count($aTypes); $i++){
                	$oType = $aTypes[$i];

                    $sHTML .=' <li>
			                        <a href="showType.php?='.htmlentities($oType->iId).'">'.
			                        htmlentities($oType->sTypeName).'</a>
			                    </li>';
                }
                    

                $sHTML .='<li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li>
                        <a href="#contact">Sign up</a>
                    </li>
                    <li>
                        <a href="#contact">Admin Login</a>
                    </li>
                    <li>
                        <a href="#contact">User Details</a>
                    </li>
                    <li>
                        <a href="#contact">Logout</a>
                    </li>';



                $sHTML .='   <form class="login">

                        <label for="#"></label>
                        <input id="#" type="text" 
                        Placeholder="Username">

                        <label for="#"></label>
                        <input id="#" type="password" placeholder="Password">
                        <button type="submit" class="btn">Log in</button>
                  
                    </form>';

                return $sHTML;
	}

	//renderType($oType){}
}

static public function renderType($oType){
	$sHTML =''
}


?>
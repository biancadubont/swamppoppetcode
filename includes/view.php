<?php
require_once('product.php');
class View{

	static public function renderNav($aTypes){
		// $sHTML =' <ul class="nav navbar-nav">
  //                   <li>
  //                       <img src="assets/splogoblksmall.jpg" alt="#">
  //                   </li>
  //                   <li>
  //                       <a href="indexabout.html">About</a>
  //                   </li>
  //                   <li>
  //                       <a href="#services">Services</a>
  //                   </li>';
            $sHTML='';

                for($i=0; $i<count($aTypes); $i++){
                	$oType = $aTypes[$i];

                    $sHTML .=' <li>
			                        <a href="showType.php?typeid='.htmlentities($oType->iId).'">'.
			                        htmlentities($oType->sTypeName).'</a>
			                    </li>';
                }
                    

                // $sHTML .='<li>
                //         <a href="#contact">Contact</a>
                //     </li>
                //     <li>
                //         <a href="#contact">Sign up</a>
                //     </li>
                //     <li>
                //         <a href="#contact">Admin Login</a>
                //     </li>
                //     <li>
                //         <a href="#contact">User Details</a>
                //     </li>
                //     <li>
                //         <a href="#contact">Log in</a>
                //     </li>
                //     <li>
                //         <a href="#contact">Logout</a>
                //     </li>';



                // $sHTML .='   <form class="login">

                //         <label for="#"></label>
                //         <input id="#" type="text" 
                //         Placeholder="Username">

                //         <label for="#"></label>
                //         <input id="#" type="password" placeholder="Password">
                //         <button type="submit" class="btn">Log in</button>
                  
                //     </form>';

                return $sHTML;
	}

	//renderType($oType){}


    static public function renderType($oType){
    	$sHTML =' <div class="row">
                <div class="col-lg-12">
                    <h3 class="featurette-headingoil">'.$oType->sTypeName.'</h3>
                </div>
            </div>';

        $aProducts = $oType->aProducts;

        $sHTML .='   <div class="row text-center">';

        for($i=0; $i<count($aProducts);$i++){
            $oProduct = $aProducts[$i];

           

            $sHTML .='<div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="assets/' .$oProduct->sPhoto.'" alt=""'.$oProduct->sPhoto. '">

                    <div class="caption">
                        <h3>'.htmlentities($oProduct->sName).'</h3>
                        <p>'.htmlentities($oProduct->sDescription).'</p>
                        <p>
                            <a href="addtocart.php?productid=' .htmlentities($oProduct->iId).'" class = "btn btn-primary">Buy Now</a> 
                            <a href="editproduct.php?productid=' .htmlentities($oProduct->iId).' class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>';

            //check for very 4th counter
            ////////this is the formula for each wrapper
            if(($i%4) == 3){

                $sHTML .='</div><div class="row text-center">';

            }
        }

        $sHTML .='</div>';
        //how many divs here?

        return $sHTML;
    }


    static public function renderUserDetails($oUser){

        $sHTML = "<h3>First Name: ".$oUser->sFirstName."</h3>
                 <h3>Last Name: ".htmlentities($oUser->sLastName)."</h3>
                 <h3>User Name: ".htmlentities($oUser->sUserName)."</h3>
                 <h3>Address: ".htmlentities($oUser->sAddress)."</h3>
                 <h3>Telephone: ".htmlentities($oUser->sTelephone)."</h3>
                 <h3>Email: ".htmlentities($oUser->sEmail)."</h3>
                 <a href='editdetails.php'><button type='submit' class = 'btn'>Edit</button></a>";

            return $sHTML;
    }


    static public function renderCart($oCart){
        $sHTML = "<div class='container main'>
                     

                    <div class='container'>
          <h2 class='featurette-heading'>Your Products</h2>
          <p></p>
        <div class='table-responsive'>
          <table class='table'>
            <thead>
              <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Remove</th>
               
              </tr>
            </thead>
            <tbody>";

        foreach ($oCart->aContents as $iProductId=>$iQuantity){
                $oProduct = new Product();
                $oProduct->load($iProductId);
                $sHTML .= "<tr>
                            <td><img src='assets/" .$oProduct->sPhoto."' 
                            height= '40' ></td>
                            <td>".htmlentities($oProduct->sName)."</td>
                            <td>".htmlentities($oProduct->sPrice)."</td>
                            <td>".$iQuantity."</td>

                            <td><a href='removefromcart.php?productid=".$iProductId."'><i class='fa fa-times'></i></a></td>
                        
                           
                          </tr>";

        }    
// totall will go here
            $sHTML .="</tbody></table>";

            return $sHTML;
    }
}



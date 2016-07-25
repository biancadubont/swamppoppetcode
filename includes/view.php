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
			                        <a href="showType.php?typeid='.htmlentities($oType->iId).'">'.
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
                        <a href="#contact">Log in</a>
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
}

        //     <div class="col-md-3 col-sm-6 hero-feature">
        //         <div class="thumbnail">
        //             <img src="assets/wairuasml.jpg" alt="">
        //             <div class="caption">
        //                 <h3>Te Whakaora te Wairua  Spirit heal Rongoa Oil</h3>
        //                 <p>This blend of oils is worn to support the spirit in healing form wounds both old and new. wear to promote deep spiritual healing. 10 ml roller bottle.</p>
        //                 <p>
        //                     <a href="#" class="btn btn-primary">Buy Now</a> <a href="#" class="btn btn-default">More Info</a>
        //                 </p>
        //             </div>
        //         </div>
        //     </div>

        //     <div class="col-md-3 col-sm-6 hero-feature">
        //         <div class="thumbnail">
        //             <img src="assets/blueangel.jpg" alt="">
        //             <div class="caption">
        //                 <h3>Blue Angel Pure Perfume Oil.</h3>
        //                 <p> Wear to promote a deep sense of inner peace and calm form your angels, or to aid in a peaceful sleep. This oil contaions amongst its ingredients lavander, clove ,chamomile and cinnamon essential oils, 10 ml roller bottle.</p>
        //                 <p>
        //                     <a href="#" class="btn btn-primary">Buy Now</a> <a href="#" class="btn btn-default">More Info</a>
        //                 </p>
        //             </div>
        //         </div>
        //     </div>

        //     <div class="col-md-3 col-sm-6 hero-feature">
        //         <div class="thumbnail">
        //             <img src="assets/godessloveroller.jpg" alt="">
        //             <div class="caption">
        //                 <h3>Deesse de l Amour Goddess of Love Pure Perfume Oil</h3>
        //                 <p>containing Amber and French Rose essential oils amongst its ingredients, this oil is worn to aid the wearer in matters of love (self or intimate) and sensuality. 10ml roller bottle.</p>
        //                 <p>
        //                     <a href="#" class="btn btn-primary">Buy Now</a> <a href="#" class="btn btn-default">More Info</a>
        //                 </p>
        //             </div>
        //         </div>
        //     </div>
        // </div>
        // <div class="row text-center">
        //     <div class="col-md-3 col-sm-6 hero-feature">
        //         <div class="thumbnail">
        //             <img src="assets/bleedingheart.jpg" alt="">
        //             <div class="caption">
        //                 <h3>Bleeding Heart Heart Heal Pure Perfume Oil.</h3>
        //                 <p>containing amongst its ingredients lavander, lime, gardenia and orris, this blend is worn for healing from emotional pain. Used for ancestral pain or current trauma this oil blend supports the wearer to grow through the healing of the heart.10ml roller bottle.</p>
        //                 <p>
        //                     <a href="#" class="btn btn-primary">Buy Now</a> <a href="#" class="btn btn-default">More Info</a>
        //                 </p>
        //             </div>
        //         </div>
        //     </div>
        //     <div class="col-md-3 col-sm-6 hero-feature">
        //         <div class="thumbnail">
        //             <img src="assets/desse.jpg" alt="">
        //             <div class="caption">
        //                 <h3>Deesse de l Amour Goddess of Love Pure Perfume Oil</h3>
        //                 <p>containing Amber and French Rose essential oils amongst its ingredients, this oil is worn to aid the wearer in matters of love (self or intimate) and sensuality. 10ml roller bottle.</p>
        //                 <p>
        //                     <a href="#" class="btn btn-primary">Buy Now</a> <a href="#" class="btn btn-default">More Info</a>
        //                 </p>
        //             </div>
        //         </div>
        //     </div>
        //     <div class="col-md-3 col-sm-6 hero-feature">
        //         <div class="thumbnail">
        //             <img src="assets/frida.jpg" alt="">
        //             <div class="caption">
        //                 <h3>Frida Pure Perfume Oil</h3>
        //                 <p> To be worn when you wish to inspire revolutionary energy within yourself, when you wish to embrace change or be inspired.
        //                 Contains Essential oils and absolutes including amber, lily of the valley and orris amongst its components, it is a deep and rich fragrance that embodies Fridas sensuality and spark.10ml roller bottle
        //                 </p>
        //                 <p>
        //                     <a href="#" class="btn btn-primary">Buy Now</a> <a href="#" class="btn btn-default">More Info</a>
        //                 </p>
        //             </div>
        //         </div>
        //     </div>
        //     <div class="col-md-3 col-sm-6 hero-feature">
        //         <div class="thumbnail">
        //             <img src="assets/quainyin.jpg" alt="">
        //             <div class="caption">
        //                 <h3>Quan Yin Pure Perfume Oil</h3>
        //                 <p>Wear to acknowledge your own divine energy. Vibrational energy of love, compassion and hope. A supportive and nurturing oil in times of self loathing or turmoil.
        //                 10ml roller bottle

        //                 </p>
        //                 <p>
        //                     <a href="#" class="btn btn-primary">Buy Now</a> <a href="#" class="btn btn-default">More Info</a>
        //                 </p>
        //             </div>
        //         </div>
        //     </div>
        // </div>
        // <div class="row text-center">

        //     <div class="col-md-3 col-sm-6 hero-feature">
        //         <div class="thumbnail">
        //             <img src="assets/juju.jpg" alt="">
        //             <div class="caption">
        //                 <h3>Juju Africaine African Juju Pure Perfume Oil</h3>
        //                 <p>Containing jasmine, patchouli and myrrh as components of its recipe, this oil is worn to aid focus and harness your personal powers. Favoured by many of my male clients for its spicy attractiveness this oil is a great aid in magical workings.10ml roller bottle

        //                 </p>
        //                 <p>
        //                     <a href="#" class="btn btn-primary">Buy Now</a> <a href="#" class="btn btn-default">More Info</a>
        //                 </p>
        //             </div>
        //         </div>
        //     </div>
        //     <div class="col-md-3 col-sm-6 hero-feature">
        //         <div class="thumbnail">
        //             <img src="assets/crown.jpg" alt="">
        //             <div class="caption">
        //                 <h3>Couronne de Ducces Crown of Success Pure Perfume Oil</h3>
        //                 <p>This oil is charmed in a master bottle that contains amounts of pure gold nuggets and gold leaf, some of whish can be seen in the finished product. included in this recipe are oils of sandalwood, vertiver and myrrh, this oil is worn to push aside those who would hinder you, to allow you to embrace success and rise up into achievment in your choosen ventures.</p>
        //                 <p>
        //                     <a href="#" class="btn btn-primary">Buy Now</a> <a href="#" class="btn btn-default">More Info</a>
        //                 </p>
        //             </div>
        //         </div>
        //     </div>
        //     <div class="col-md-3 col-sm-6 hero-feature">
        //         <div class="thumbnail">
        //             <img src="assets/la.jpg" alt="">
        //             <div class="caption">
        //                 <h3>La Sirene Pure Perfume Oil</h3>
        //                 <p>An uplifting blend with notes of lime and pine, this blend is worn to bring inspiration or when you wish to embrace your sensuality. Dedicated to the sirene of the seas it embodies a beautiful life affirming energy. As La Sirene is the patron of music, it can also be worn to invoke musical inspiration calling in the divine energys when playing music and tuning into spirit. 10ml roller bottle.</p>
        //                 <p>
        //                     <a href="#" class="btn btn-primary">Buy Now</a> <a href="#" class="btn btn-default">More Info</a>
        //                 </p>
        //             </div>
        //         </div>
        //     </div>
            
        //     <div class="col-md-3 col-sm-6 hero-feature">
        //         <div class="thumbnail">
        //             <img src="assets/fastluck.jpg" alt="">
        //             <div class="caption">
        //                 <h3>Bon Venir Rapide Fast Luck Pure Perfume Oil</h3>
        //                 <p>With hints of rose, patchouli and cinnamon this oil is from an age old recipe that has been worn by lovers, gamblers and business people for decades. Wear this oil to aid you in great good luck in matters of money, the heart or legal issues, it is often used to draw symbols on the body as an extra charm as you go about your sacred duties.10ml roller bottle.</p>
        //                 <p>
        //                     <a href="#" class="btn btn-primary">Buy Now</a> <a href="#" class="btn btn-default">More Info</a>
        //                 </p>
        //             </div>
        //         </div>
        //     </div>
        // </div>
        // <div class="row text-center">

        //     <div class="col-md-3 col-sm-6 hero-feature">
        //         <div class="thumbnail">
        //             <img src="assets/goddesslove.jpg" alt="">
        //             <div class="caption">
        //                 <h3>Goddess of Love body Oil</h3>
        //                 <p>With hints of rose, containing Amber and French Rose essential oils amongst its ingredients, this oil is worn to aid the wearer in matters of love (self or intimate) and sensuality. 150 ml bottle.</p>
        //                 <p>
        //                     <a href="#" class="btn btn-primary">Buy Now</a> <a href="#" class="btn btn-default">More Info</a>
        //                 </p>
        //             </div>
        //         </div>
        //     </div>
        //     <div class="col-md-3 col-sm-6 hero-feature">
        //         <div class="thumbnail">
        //             <img src="assets/oshunface.jpg" alt="">
        //             <div class="caption">
        //                 <h3>Oshun Face Serum</h3>
        //                 <p>text to go here need more info</p>
        //                 <p>
        //                     <a href="#" class="btn btn-primary">Buy Now</a> <a href="#" class="btn btn-default">More Info</a>
        //                 </p>
        //             </div>
        //         </div>
        //     </div>
        // </div>
     

        // <hr>';

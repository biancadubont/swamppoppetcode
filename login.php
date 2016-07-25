<?php

    ob_start();
    require_once('includes/cart.php');
    session_start();
;
    require_once('includes/header.php');
    require_once('includes/user.php');
    require_once('includes/form.php');

    $oForm = new Form();

    if(isset($_POST['submit'])==true){
        $oUser = new User();
        $bSuccess = $oUser->loadByUserName($_POST['username']);

        if($bSuccess == true){

            if (password_verify($_POST['password'], $oUser->sPassword)==true){
                $_SESSION['userid']= $oUser->iId;

                $oCart = new Cart();

                $oCart->add(4);

                $_SESSION['cart']= $oCart;

                header('Location: userdetails.php');

            }
        }
    }

$oForm->open();
$oForm->MakeTextInput('Username', 'username');
$oForm->MakeTextInput('Password','password');
$oForm->MakeSubmit('Login', 'submit');
$oForm->close();
?>

 

                     <?php echo $oForm->sHTML;?>

                     <!-- ////////What to do here, how do i structure this correctly?  -->


 <?php
 require_once('includes/footer.php');
 ?>
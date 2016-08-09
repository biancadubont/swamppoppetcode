<?php 
/////////CONTROLLER///////
ob_start();
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
require_once('includes/user.php');
require_once('includes/form.php');
require_once('includes/header.php');

$oForm = new Form();






// if(isset($_POST['submit']) ==true){
//       $oForm->aData = $_POST;

//       if($_POST['username'] == ''){
//         $oForm->addError('username','required');
//         $oForm->addError('','required');

//       }

      // if(count($oForm->aErrors) == 0){
      if(isset($_POST['submit'])== true){

        $oUser = new User();
        $oUser->sUserName =$_POST['username'];
        $oUser->sPassword = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $oUser->sFirstName =$_POST['first_name'];
        $oUser->sLastName =$_POST['last_name'];
        $oUser->sAddress =$_POST['address'];
        $oUser->sTelephone =$_POST['telephone'];
        $oUser->sEmail =$_POST['email'];
        $oUser->sAdmin ='no';
        $oUser->save();

        //print_r($oUser); exit;

        // echo '<pre>';
        // print_r($oUser);

        // print_r($_POST);
        // echo '</pre>';

        header('Location: success.php');
        exit;
      }

        


        $oForm->open();
        $oForm->makeInputField('First Name','first_name', 'text');
        $oForm->makeInputField('Last Name','last_name', 'text');
        $oForm->makeInputField('Address','address', 'text');
        $oForm->makeInputField('Telephone','telephone', 'tel');
        $oForm->makeInputField('Email','email', 'email');
        $oForm->makeInputField('Username','username', 'text');
        $oForm->makeInputField('Password','password', 'password');
        $oForm->makeSubmit('Submit','submit');
        $oForm->close();



?>

      <div class="row">
        <div class="col-sm-12">
          <h1 class= "featurette-heading">Sign up</h1>
        </div>

        <div class="col-sm-3">
         
        </div>

        <div class="col-sm-4">
          <?php echo $oForm->sHTML; ?>
        </div>

        <div class="col-sm-5">
            <img class="featurette-imagemary img-circle responsive-img" src="assets/erzulie.jpg">
        </div>
      </div>


       <!--  <form action="index.html" class="contact">
                <fieldset class="contact-inner">
                  <p class="contact-input">
                    <input type="text" name="name" placeholder="Your Name…" autofocus>
                  </p>
                   <p class="contact-input">
                    <input type="text" name="name" placeholder="Your Phone number..." autofocus>
                  </p>
                   <p class="contact-input">
                    <input type="text" name="name" placeholder="Your Email…" autofocus>
                  </p>

                  <p class="contact-input">
                    <label for="select" class="select">
                      <select name="subject" id="select">
                        <option value="" selected>Choose Subject…</option>
                        <option value="1">I would like a tarot reading</option>
                        <option value="1">I would like a psychic reading</option>
                         <option value="1">I would like to be a distributor </option>
                        <option value="1">I have a question about your products</option>
                      </select>
                    </label>
                  </p>

                  <p class="contact-input">
                    <textarea name="message" placeholder="Your Message…"></textarea>
                  </p>

                  <p class="contact-submit">
                    <input type="submit" value="Send Message to Swamp Poppet">
                  </p>
                </fieldset>
              </form> -->

                <!-- <h2 class="featurette-headingmsg">Contact Us</h2>    

        <div class="col-sm-3">
             <form action="" method="post"class="signup">
                <fieldset class="contact-inner">

                  <p class="contact-input, signup">
                    <input type="text" name="firstname" placeholder="First Name" autofocus>
                  </p>
                  <p class="contact-input, signup">
                    <input type="text" name="lastname" placeholder="Last Name" autofocus>
                  </p>
                    <p class="contact-input, signup">
                    <input type="text" name="address" placeholder="Address" autofocus>
                  </p>
                   <p class="contact-input, signup">
                    <input type="text" name="number" placeholder="Your Phone number" autofocus>
                  </p>
                   <p class="contact-input, signup">
                    <input type="text" name="email" placeholder="Your Email…" autofocus>
                  </p>
                  <p class="contact-input, signup">
                    <input type="text" name="username" placeholder="User Name" autofocus>
                  </p>
                  <p class="contact-input, signup">
                    <input type="text" name="password" placeholder="Password" autofocus>
                  </p>
                  <p class="contact-submit, signup">
                    <input type="submit" value="Sign up">
                  </p>
                </fieldset>
              </form>
            </div> -->

<?php
  require_once('includes/footer.php');
?>  
   
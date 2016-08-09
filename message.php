<?php
 require_once('includes/header.php');
?>
  
    

<div class="row">
<h2 class="featurette-headingmsg">Contact Us</h2>    
        <div class="col-sm-4 swampdetails">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam veritatis, reprehenderit earum deserunt accusamus et ratione pariatur soluta. Hic sequi laudantium vero sapiente, odio tempore veritatis nisi! Repellendus, repellat, vel.
        </div>
        <div class="col-sm-3">
             <form action="index.html" class="contact">
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
              </form>
            </div>

            <div class="col-sm-5">
                <img class="featurette-imagemary img-circle" src="assets/erzulie.jpg">
            </div>
   <?php
    require_once ('includes/footer.php');

   ?>
   
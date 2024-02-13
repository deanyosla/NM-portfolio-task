<?php $messageText = 'Please type your message here...'; ?>
<div class="contact-section container">
          <section id="contact">
            <h3>Get in Touch</h3>
            <p>
              Do you want to get in touch?<br />
              Give me a call at...
            </p>
            <h4><a href="tel:07741328964">07741328964</a></h4>
            <p>Or send me an email at...</p>
            <h4>
              <a href="mailto:deanyosla@icloud.com">deanyosla@icloud.com</a>
            </h4>
          </section>
          <section id="contact-form">
            <form action="index.php" method="post">
              <h2>Send me a message <i class="fa-solid fa-arrow-right"></i></h2>
              <div class="input-row">
                <input id="first_name" name="first_name" type="text" value="<?php echo $_SESSION['first_name'] ?? ''; ?>" placeholder="First Name*">
                <input id="last_name" name="last_name" type="text" value="<?php echo $_SESSION['last_name'] ?? ''; ?>" placeholder="Last Name*">
              </div>
              <div class="input-rowTwo">
                <input id="email" name="email" type="email" value="<?php echo $_SESSION['email'] ?? ''; ?>" placeholder="Email Address*">

                <input id="subject" name="subject" type="text" placeholder="Subject..." value="<?php echo $_SESSION['subject'] ?? ''; ?>">
                <textarea id="message" name="message" value="<?php echo $_SESSION['message'] ?? ''; ?>" placeholder="<?php echo  $messageText ?>"></textarea>
              </div>
              <div>
                <button class="btn-submit" type="submit" action="index.php">Submit</button>
              </div>
               
              <div class="alert-wrap">                        
                          <div class="alert-hidden <?php if ($_SESSION['form_sent'] == true) {
                                                   echo 'alert-success';
                                                  } else if (!empty($_SESSION['errorMessage'])){
                                                   echo 'alert-fail';
                                                  } else {
                                                    echo '';
                                                    }
                                                   ?>">
                                        <span><?php if($_SESSION['form_sent'] == true) {
                                                echo 'Your Enquiry has been Submitted';
                                                } else {
                                                  echo implode("<br><br>",$_SESSION['errorMessage']);
                                                                $_SESSION['errorMessage'] = [];
                                                                }
                                               ?>
                                         </span>
                                        <button type="button" class="close"><i class="fa-solid fa-xmark"></i></button>
                           </div>
                      </div>
            </form>
          </section>
          
 </div>
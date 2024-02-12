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
            <form action="index.php#contact" method="post">
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
                <button class="btn-submit" type="submit" action="index.php#contact">Submit</button>
              </div>
              <?php include ("inc/form_val.php"); ?>
              <span id="first_name_error" class="error-message"></span>
              <span id="last_name_error" class="error-message"></span>
              <span id="email_error" class="error-message"></span>
              <span id="message_error" class="error-message"></span>            
            </form>
          </section>
          
 </div>
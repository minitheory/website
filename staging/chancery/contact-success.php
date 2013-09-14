<?php
$bodyClass = 'contact-page';
$thisPage = 'contact';
$title = "Contact Us - Chancery LLC";
include_once 'header.php';
?>

<div class="banner">
  <img class="banner-image" src="images/banner-pebbles.jpg"/>
</div>

  <div class="row main">
    <div class="twelve columns">
      <div class="row">
        <div class="twelve columns">
          <h1>Contact us</h1>
        </div>
      </div>
      <div class="row">
        <div class="twelve columns page-content">
          <div class="row">
            <div class="six columns">
               <?php

          // email contents
          $name = $_POST['contact-name'];
          $company = $_POST['contact-company'];
          $email = $_POST['contact-email'];
          $message = $_POST['contact-message'];
          
          //sending
          $email_to = "sheldon@minitheory.com";
          $email_subject = "Message received from website";
          $email_message = "New message received from website contact form:.\n\n";
          function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
          }
          $email_message .= "Name: ".clean_string($name)."\n";
          $email_message .= "Company: ".clean_string($company)."\n";
          $email_message .= "Email: ".clean_string($email)."\n";
          $email_message .= "Message: ".$message."\n";

          // create email headers
          $headers = 'From: '.$email."\r\n".
          'Reply-To: '.$email."\r\n" .
          'X-Mailer: PHP/' . phpversion();
          if(mail($email_to, $email_subject, $email_message, $headers)){
            echo("<p>Thank you for contacting us. We will get back to you as soon as possible.</p>");
          }
          else {
            //echo('<p>message phailed</p>');
          }
          ?>
            </div>
            <div class="six columns">
              <ul class="contact-info">
                <li>
                  <strong>Address</strong><span>55 Market Street, #08-01<br/>Singapore 048 941</span>
                  <img src="images/ico-address.png"/>
                </li>
                <li>
                  <span>
                    <strong>Phone</strong>+65 6236 9350 (Corporate)<br/>
                    <strong>&nbsp;</strong>+65 6236 9358 (Dispute)
                  </span>
                </li>
                <li>
                  <strong>Fax</strong>+65 6532 9937
                  <img src="images/ico-fax.png"/>
                </li>
                <li>
                  <strong>Email</strong><a href="mailto:info@chanceryllc.com">info@chanceryllc.com</a>
                  <img src="images/ico-email.png"/>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
<?php
include_once 'subfooter.php';
include_once 'footer.php';
?>
  
 

  
  

<?php
	define("TITLE", "Contact | Kings Island");
  include("./includes/header.php");
?>

<div id="contact">
  <hr>
  <h1>Get in touch!</h1>
  <?php

    // check for header injections
    function has_header_injection($str) {
      return preg_match("/[\r\n]/", $str);
    }

    if (isset($_POST['contact_submit'])) {
      $name = trim($_POST['name']);
      $email = trim($_POST['email']);
      $msg = $_POST['message'];

      // check to see if name or email have header injections
      if (has_header_injection($name) || has_header_injection($email)) {
        die();
      }

      if (!$name || !$email || !$msg) {
        echo '<h4 class="error">All fields required.</h4><a href="./contact.php" class="button block">Go back and try again.</a>';
        exit;
      }

      // add the email recipient to a variable
      $to = "kay.k@comcast.net";

      // creat a subject
      $subject = "$name sent you a message via your contact form.";

      // construct the actual message
      $message = "Name: $name\r\n";
      $message .= "Email: $email\r\n";
      $message .= "Message:\r\n$msg";

      // if the subscribe checkbox was checked...
      if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {
        // add a new line to the message variable
        $message .= "\r\n\r\nPlease add $email to the mailing list.\r";
      }
      $message = wordwrap($message, 72);
      //set the mail headers into a variable
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/plain; charset=iso-8859-1";
      $headers .= "From: $name <$email> \r\n";
      $headers .= "X-Priority: 1\r\n";
      $headers .= "X-MSMail-Priority: High\r\n\r\n";

      // Send the email
      mail($to, $subject, $message, $headers);
    // }

  ?>
  <!-- show success message after email has sent -->
  <h5>Thank you for contacting me.</h5>
  <p>Please allow 24 hours for a response.</p>
  <p><a href="./index.php" class="button block">&laquo; Go to Home Page</a></p>
  <?php
  } else {
  ?>

  <form id="contact-form" method="post" action="">
    <label for="name">Your name</label>
    <input id="name" type="text" name="name">

    <label for="email">Your email</label>
    <input id="email" type="email" name="email">

    <label for="message">Your message</label>
    <textarea id="message" type="text" name="message"></textarea>

    <input id="subscribe" type="checkbox" name="subscribe" value="Subscribe">
    <label for="subscribe">Subscribe to our newsletter</label>

    <input type="submit" class="button next" name="contact_submit" value="Send Message">
  </form>

  <?php } ?>
  <hr>
</div><!-- contact -->


<?php
  include("./includes/footer.php");
?>

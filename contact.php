<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);


    if ($name == "" OR $email == "" OR $phone == "" OR $message == "") {
        echo "You must specify a value for name, email, phone and message.";
        exit;
    }

    foreach( $_POST as $value ){
        if( stripos($value,'Content-Type:') !== FALSE ){
            echo "There was a problem with the information you entered.";    
            exit;
        }
    }

    if ($_POST["address"] != "") {
        echo "Your form submission has an error.";
        exit;
    }

    require_once("inc/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!$mail->ValidateAddress($email)){
        echo "You must specify a valid email address.";
        exit;
    }

    $email_body = "";
    $email_body = $email_body . "<strong>Name:</strong> " . $name . "<br>";
    $email_body = $email_body . "<strong>Email:</strong> " . $email . "<br>";
    $email_body = $email_body . "<strong>Phone:</strong> " . $phone . "<br>";
    $email_body = $email_body . "<strong>Message:</strong> " . $message;

    $mail->SetFrom($email, $name);
    $address = "info@bravocreative.co";
    $mail->AddAddress($address, "Bravo Creative");
    $mail->Subject    = "Bravo Creative Form Submission | " . $name;
    $mail->MsgHTML($email_body);

    if(!$mail->Send()) {
      echo "There was a problem sending the email: " . $mail->ErrorInfo;
      exit;
    }

    header("Location: contact.php?status=thanks");
    exit;
}
?>
                <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                    
                    <?php
                    $title = 'Wild Wood Creations | Contact';
                    include('inc/header.php');
                    ?> 

                        <body>
                        <div id="opening">
                          <div class="row">
                            <div id="logo" class="small-12 columns text-center">
                                <img src="img/bc-logo-6x3.png" />
                            </div>
                          </div>
                    <?php include('inc/top-nav.php'); ?>   


                    <div class="row">
                        <div class="small-12 large-12 large-centered columns text-center">
                            <h3 class="subheader">Thanks for the email! I&rsquo;ll be in touch shortly!</h3>
                            <a href="index.php" class="button secondary">Return Home</a>
                        </div>
                    </div>
                </body>
                </html>
            <?php } else { ?>


<?php
$title = 'Wild Wood Creations | Contact';
include('inc/header.php');
?>   

<body>
<div id="opening">
  <div class="row">
    <div id="logo" class="small-12 columns text-center">
        <img src="img/bc-logo-6x3.png" />
    </div>
  </div>

<?php include('inc/top-nav.php'); ?>

</div><!-- Closes Opening -->

<div class="row">
    <div class="small-12 large-8 large-centered columns">
        <form method="post" action="contact.php">
            <label for="name">Name <small>Required</small></label>
            <input type="text" placeholder="Full Name" name="name" id="name">

            <label for="company">Company</label>
            <input type="text" placeholder="Company Name" name="company" id="company">

            <label for="email">Email <small>Required</small></label>
            <input type="email" placeholder="Valid E-mail Address" name="email" id="email">

            <label for="phone">Phone</label>
            <input type="tel" placeholder="123-456-7890" name="phone" id="phone">

            <label for="project">Project <small>Required</small></label>
            <select name="project" id="project">
                <option selected disabled value=" ">Select a Project...</option>
                <option value="Web Design">Web Design</option>
                <option value="Video Production">Video Production</option>
                <option value="Photography">Photography</option>
                <option value="Other">Other-Specify in Message</option>
            </select>

            <label for="message">Message <small>Required</small></label> 
            <textarea name="message" placeholder="Leave a message" id="message"></textarea>

            <input type="submit" value="Send">
        </form>
    </div>
</div>

                

            <?php } ?>


</body>
</html>
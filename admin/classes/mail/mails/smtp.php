<?php
require_once("../../core/init.php");
/**
 * This example shows making an SMTP connection with authentication.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../src/PHPMailer.php';
require '../src/SMTP.php';


//Create a new PHPMailer instance
$mail = new PHPMailer;
$mail2 =  new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail2->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail2->SMTPDebug = SMTP::DEBUG_SERVER;


// GET REQUEST PARAMETERS


        $first_name=trim($_POST['firstname']);
        $last_name=trim($_POST['lastname']);
        $email=trim($_POST['email']);
        $telephone=trim($_POST['telephone']);
        $country=trim($_POST['country']);
        $organization=trim($_POST['organisation']);
        $website=trim($_POST['website']);
        $area_of_interest=trim($_POST['product']);




/*------------------------------------------------------------------------------------------------------------------------------ 
*   EMAIL MESSAGES
* ------------------------------------------------------------------------------------------------------------------------------
*/

$message = '                    
<html>
    <body style="font-family: helvetica;">
        <section style="background: #e7e9ea; padding: 0 100px;">
            <center>
                <article style="border-top: 3px solid #f47821; border-radius: 0px; background: #ffffff;">
                    <div style="background: #000; padding: 10px 0; height: auto; overflow: auto; color: #ffffff;">
                        <img src="cid:logo_logo" class="img img-responsive" style="float: left; margin-left: 10px; height: 40px;">
                        <h1 style="font-weight: 400; text-transform: uppercase;">Contact details</h1>
                    </div>
                    <div style="padding: 20px 0;">
                        <table rules="all" style="border-color: #666; color:#000;" cellpadding="10" class="table_mail">
                            <tr><td><strong>First name:</strong> </td><td>' . $first_name . '</td></tr>
                            <tr><td><strong>Last name:</strong> </td><td>' . $last_name . '</td></tr>
                            <tr><td><strong>Telephone:</strong> </td><td>' . $telephone . '</td></tr>
                            <tr><td><strong>Email:</strong> </td><td>' . $email . '</td></tr>
                            <tr><td><strong>Organization name:</strong> </td><td>' . $organization . '</td></tr>
                            <tr><td><strong>Country:</strong> </td><td>' . $country . '</td></tr>
                            <tr><td><strong>Area of Interest:</strong> </td><td>'. $area_of_interest . '</td></tr>
                            <tr><td><strong>Website:</strong> </td><td>'. $website . '</td></tr>
                        </table>
                    </div>
                </article>
            </center>
        </section>
    </body>
</html>';

$email = "clovis@cube.rw";        
$subject = "Contact Us";          


$user_subject ='Thank you for reaching out to Cube';
$user_message ='
<html>
<body>
  
    <section class="main">
        <div class="email-content" style=" background-color: #f8f8f8;padding:60px;width: 50%;border-radius: 15px;">
            <img src="cid:logo_black" style="width:150px;">
            <p class="message" style="color:#000; margin-top:30px !important; margin:0;">Dear '.$first_name.', Thank you for getting in touch with Cube.</p> 
            
            <p style="color:#000; margin:0;">We will get back to you shortly. In the meantime, please take a minute to follow us on our social media accounts: </p>
          <p>
             <a href="https://www.facebook.com/CubeRwanda" target="_blank" style="text-decoration: none !important;">
                    <img src="cid:logo_fb" style="height:30px;">
                  </a>
                
                  <a href="https://twitter.com/cuberwanda?lang=en" target="_blank" style="text-decoration: none !important;">
                    <img src="cid:logo_tweet" style="height:30px;">
                  </a>
               
                  <a href="https://instagram.com/cube__rwanda?igshid=ufdv2zvcxaws" target="_blank" style="text-decoration: none !important;">
                    <img src="cid:logo_insta" style="height:30px;">
                  </a>
            </p>
            <h3 style="color:#000;">Warm wishes,</h3>
            <p class="links"><a href="tel:+250733110110 " style="color:#f47821 !important; text-decoration: none;">+250 733 110 110 </a><br>
            <a href="mailto:info@cube.rw " style="color:#f47821 !important; text-decoration: none;">info@cube.rw </a><br>
            <a href="https://cube.rw/" style="color:#f47821 !important; text-decoration: none;">www.cube.rw</a></p>
        </div>
    </section>
</body>
</html>';

/*------------------------------------------------------------------------------------------------------------------------------ 
*   END OF EMAIL MESSAGES
* ------------------------------------------------------------------------------------------------------------------------------
*/



/*------------------------------------------------------------------------------------------------------------------------------ 
*   EMAIL SETTINGS
* ------------------------------------------------------------------------------------------------------------------------------
*/



//Whether to use SMTP authentication
$mail->SMTPAuth = true;
$mail2->SMTPAuth = true;
$mail->SMTPSecure = "ssl/tls";


//Set the hostname of the mail server
$mail->Host = 'mail.cube.rw';
$mail2->Host = 'mail.cube.rw';

//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 26;
$mail2->Port = 26;
//Username to use for SMTP authentication
$mail->Username = 'clovis@cube.rw';
$mail2->Username = 'clovis@cube.rw';
//Password to use for SMTP authentication
$mail->Password = 'clovis132498';
$mail2->Password = 'clovis132498';
//Set who the message is to be sent from
$mail->setFrom('cube@cube.rw', 'Cube Communications Ltd');
$mail2->setFrom('cube@cube.rw', 'Cube Communications Ltd');
//Set an alternative reply-to address
$mail->addReplyTo('cube@cube.rw', 'Cube Communications Ltd');
$mail2->addReplyTo('cube@cube.rw', 'Cube Communications Ltd');
//Set who the message is to be sent to
$mail->addAddress('lucienmeru@gmail.com', '');
$mail2->addAddress('lucienmeru@gmail.com', '');

//Set the subject line
$mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.php'), __DIR__);

// Embed images
$mail2->AddEmbeddedImage('twit.png', 'logo_tweet', 'twit.png');
$mail2->AddEmbeddedImage('insta.png', 'logo_insta', 'insta.png');
$mail2->AddEmbeddedImage('fb.png', 'logo_fb', 'fb.png');
$mail2->AddEmbeddedImage('black_logo.png', 'logo_black', 'black_logo.png');
$mail->AddEmbeddedImage('logo.png', 'logo_logo', 'logo.png');
// Send email
$mail->msgHTML($message);
$mail2->msgHTML($message);
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

// Setting the character encoding to UTF-8 to allow proper encoding and decoding of french characters
$mail->CharSet = 'UTF-8'; 

//send the message, check for errors

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}

// Second



//Set the subject line
$mail2->Subject = $user_subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.php'), __DIR__);
$mail2->msgHTML($user_message);
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

// Setting the character encoding to UTF-8 to allow proper encoding and decoding of french characters
$mail2->CharSet = 'UTF-8'; 

//send the message, check for errors

if (!$mail2->send()) {
    echo 'Mailer Error: ' . $mail2->ErrorInfo;
    
} else {
    echo 'Message sent!';
    $sql="UPDATE contact SET status='SENT' WHERE email='$email' AND status='EMAIL-PENDING'";
    $items=DB::getInstance()->query($sql);
}


/*------------------------------------------------------------------------------------------------------------------------------ 
*   END EMAIL SETTINGS
* ------------------------------------------------------------------------------------------------------------------------------
*/
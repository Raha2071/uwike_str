<?php

    
    $email="lucienmeru@gmail.com";
    $subject= "NEW CONTACT DETAILS";



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



/*------------------------------------------------------------------------------------------------------------------------------ 
*   END OF EMAIL MESSAGES
* ------------------------------------------------------------------------------------------------------------------------------
*/



/*------------------------------------------------------------------------------------------------------------------------------ 
*   EMAIL SETTINGS
* ------------------------------------------------------------------------------------------------------------------------------
*/




/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

require '../src/PHPMailer.php';
require '../src/SMTP.php';
//require '../src/Exception.php';
$mail = new PHPMailer(TRUE);

try {
   
   
   /* SMTP parameters. */
   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = true;
   $mail->SMTPSecure = 'tls';
   $mail->Username = 'cubedigitalteamtest@gmail.com';
   $mail->Password = 'digitalteamtest12345';
   $mail->Port = 587;
   

   $mail->setFrom('cubedigitalteamtest@gmail.com', 'Cube Digital Team');
   $mail->addAddress("lucienmeru@gmail.com");
   $mail->Subject =  $subject;
   // Embed images
  
   $mail->AddEmbeddedImage('logo.png', 'logo_logo', 'logo.png');
   $mail->msgHTML($message);
   /* Disable some SSL checks. */
   $mail->SMTPOptions = array(
      'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
      )
   );
   
   /* Finally send the mail. */
   $mail->send();
   echo 'Message sent!';
    $sql="UPDATE contact SET status='SENT' WHERE email='$email' AND status='EMAIL-PENDING'";
    $items=DB::getInstance()->query($sql);

}
catch (Exception $e)
{
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
}
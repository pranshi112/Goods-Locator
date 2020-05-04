<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "first_db");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['forgot'])){
$selector = bin2hex(random_bytes(8));
$token = random_bytes(32);
$url="localhost/PHPMailer/create-new-password.php?selector=". $selector."&validator=".bin2hex($token);
$expires = date("U") +1800;

$userEmail = $_POST["email"];
$sql = "DELETE from pwdreset where pwdResetEmail=?";
$stmt = mysqli_stmt_init($db);
if(!mysqli_stmt_prepare($stmt, $sql)){
  echo "There was an error!";
  exit();
}else{
    mysqli_stmt_bind_param($stmt, "s", $userEmail);
    mysqli_stmt_execute($stmt);
}

$sqls = "INSERT INTO pwdreset(pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES(?,?,?,?);";

$stmt = mysqli_stmt_init($db);
if(!mysqli_stmt_prepare($stmt, $sqls)){
  echo "There was an error!";
  exit();
}else{
    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($stmt);

   /* $to = $userEmail;

    $subject = "Reset your password for GoodsLoctor";

    $message = '<p>We received a password reset request. The link to rest your password is given below. If you did not make any request, yoy can ignore this email.</p>';
    $message .= '<p>Here is your password reset link: </br>';

    $message .= '<a href= "'.$url.'">' .$url. '</a></p>';

    $headers = "From = GoodsLoactor <vidita7agrawal@gmail.com>\r\n";
    $headers .= "Reply-To: vidita7agrawal@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);*/

    
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    
    
    // Load Composer's autoloader
    require 'vendor/autoload.php';
    
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'viditaagrawal77@gmail.com';                     // SMTP username
        $mail->Password   = 'gvxf jvkg htlh xbhb';                               // SMTP password
        $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('viditaagrawal77@gmail.com', 'Vidita');
        $mail->addAddress($userEmail, 'Arpita');     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = '<a href= "'.$url.'">' .$url. '</a></p>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


    header("Location: forgot_password.php?reset=success");


}

}else{

}
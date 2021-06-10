<?php
use PHPMailer\PHPMailer\PHPMailer;
if(isset($_POST['subject']) && isset($_POST['message'])){
    //echo "<PRE>",print_r($_POST),"</PRE>";die;
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    require_once "includes/PHPMailer/PHPMailer.php";
    require_once "includes/PHPMailer/SMTP.php";
    require_once "includes/PHPMailer/Exception.php";

    $mail = new PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "varun.ncrmail@gmail.com";
    $mail->Password = "Gstn@1212";
    $mail->SetFrom("varun.ncrmail@gmail.com");
    $mail->Subject = "Test Subject";
    //$mail->Body = "hello";
    $mail->AddAddress("varunkumarmca@gmail.com");//Replace here to address to whom message need be sent
    $body = "Hi! <br><br> We have received the following information:<br><br>";
    $body .= "Issue : " . $subject . "<br><br>";
    $body .= "Description : " . $message ."<br><br>";
    $mail->Body = $body;

    if(!$mail->Send()) {
        $status = "Failed";
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $status = "Success";
        echo "Message has been sent";
    }
//https://stackoverflow.com/questions/36351817/phpmailer-smtp-error-failed-to-connect-to-server
//Links that fix the problem (you must be logged into google account):
//https://security.google.com/settings/security/activity?hl=en&pli=1
//https://www.google.com/settings/u/1/security/lesssecureapps
//https://accounts.google.com/b/0/DisplayUnlockCaptcha
    
exit(json_encode(array("status" => $status, "response" => $response)));
}
?>
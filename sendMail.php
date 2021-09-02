<?php
use PHPMailer\PHPMailer\PHPMailer;
if(isset($_POST['subject']) && isset($_POST['message'])){
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    require_once "includes/PHPMailer/PHPMailer.php";
    require_once "includes/PHPMailer/SMTP.php";
    require_once "includes/PHPMailer/Exception.php";

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465;
    $mail->IsHTML(true);
    $mail->Username = "einvoice.gov@gmail.com";
    $mail->Password = "Gstn@1212";
    $mail->SetFrom("einvoice.gov@gmail.com", "e-Invoice Feedback");
    $mail->Subject = "Issue Raised by e-Invoice website User";
       $mail->AddAddress("varun.ncrmail@gmail.com");

    $body = "<br> We have received the following information:<br><br>";
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
    
exit(json_encode(array("status" => $status, "response" => $response)));
}
?>
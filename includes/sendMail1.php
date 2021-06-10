<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(inset($_POST['subject']) && inset($_POST['message'])){
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    require once "PHPMailer/PHPMailer.php";
    require once "PHPMailer/SMTP.php";
    require once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    $mail-> isSMTP();
    $mail-> Host = "smtp.gmail.com";
    $mail-> SMTPAuth   = true;      
    $mail-> Username = "varun.ncrmail@gmail.com";
    $mail-> Password = "Gstn@1212";
    $mail-> Port = 465;
    $mail-> SMTPSecure = "ssl";

    $mail->isHTML(true); 
    $mail->setFrom('varun.ncrmail@gmail.com', 'E-Invoice');
    $mail->addAddress('varun.ncrmail@gmail.com', 'e-Invoice');     //Add a recipient

    //Content
                                 //Set email format to HTML
    $mail->Subject = ("$email ($subject)")
    $mail->Body    = ("$email ($message)")


    if($mail->send()){
        $status = "Success";
        $response = "Email is Sent!";
    }else{
        $status = "Failed";
        $response = "Something is wrong! : <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}
?>
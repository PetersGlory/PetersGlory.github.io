<?php
// use PHPMailer\PHPMailer\PHPMailer;

      ini_set('display_errors',1);
error_reporting(E_ALL);
$status = "";
$response = "";
// require_once "PHPMailer/PHPMailer.php";
// require_once "PHPMailer/SMTP.php";
// require_once "PHPMailer/Exception.php";
   if(isset($_POST['name']) && isset($_POST['mail'])){
      $name = $_POST['name'];
      $email = $_POST['mail'];
      $mobile = $_POST['mobile'];
      $message = $_POST['message'];

      $from = $email;
      $to = "info@icanacademy.org.ng";
      $subject = "Seeking for Inquiry";
      $msg = $message." <br>Mobile Number: ".$mobile;
      $headers = "FROM: ".$from;
      // $mail = 
      if (mail($to,$subject,$message, $headers)) {
         $status = "Successfully sent your message..";
         $response = "successfully send";
      } else {
         $status = "Unable to send your message!!! ";
         $response = "Error sending this file";
      }
      echo json_encode(array("status"=>$status,"response"=>$response));

         }
//       $msg = $name . "  <br> "."Phone Number: ". $mobile . "<br><br>". $message;

//       $mail = new PHPMailer();
//       //setting up smtp
//       // $mail->isSMTP();
//       $mail->Host = "smtp.gmail.com";
//       $mail->SMTPAuth = true;
//       $mail->Username = "peterglo2200@gmail.com";
//       $mail->Password = "Glory2200";
//       $mail->Port = 465; //587
//       $mail->SMTPSecure = "ssl"; //tls

//       //Email setting
//       $mail->isHTML(true);
//       $mail->setFrom($email, $name);
//       $mail->addAddress("petergod1st@gmail.com");
//       $mail->Body = $msg; 

//       //sending mail
//       if($mail->send())
//          $response = "successfully send";
//       else
//          $response = "Error sending this file";
//       echo json_encode(array("response"=>$response));
//    }

?>
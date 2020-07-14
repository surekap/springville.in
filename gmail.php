<?php
error_reporting(0);
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'vendor/phpmailer/phpmailer/src/Exception.php';
	require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require 'vendor/phpmailer/phpmailer/src/SMTP.php';

 require 'vendor/autoload.php';
	
	$mail = new PHPMailer();
	$output = '';

  if (isset($_POST['submit'])) {
    $S_name = $_POST['S_name'];
    $email = $_POST['email'];
    $S_phone = $_POST['S_phone'];
    $Description = $_POST['Description'];

     try {
      $mail->isSMTP();
      $mail->SMTPAuth = true;
	  $mail->SMTPSecure = 'ssl'; 
	  $mail->Host = 'smtp.gmail.com';
	  $mail->Port = 465;
	 
      $mail->isHTML();
      $mail->Username = 'smmraghuestates@gmail.com';
      $mail->Password = 'smm@1234';
	  
      $mail->setFrom('smmraghuestates@gmail.com');
	  $mail->addAddress('branding@surekaproperties.com');
	  $mail->addBcc('smmspringville@gmail.com');
	  $mail->addBcc('rajan@surekaproperties.com');
	  
	  
	  $mail->isHTML();
      $mail->Subject = 'Business inquiry through Springville Homes';
      $mail->Body = "<br/>Dear Sir,<br/> There is a Feedback / Enquiry form:<br/><b>Name : </b>$S_name <br><b>Email : </b>$email <br><b>Phone : </b>$S_phone <br><b>Message : </b>$Description";
	  if ($mail->Send())
        
            include($script_root . 'thankyou.html');
        
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }

?>
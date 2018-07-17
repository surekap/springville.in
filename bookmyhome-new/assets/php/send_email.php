<?php 
	
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$msg = $_REQUEST['msg'];
	$to = $_POST['rajan@surekaproperties.com'];
	//$to .= 'nagpal@surekaproperties.com' . ', ';
	//$to .= 'branding@surekaproperties.com ';
	$from = "rajan@surekaproperties.com";
//data
$subject = "Springville Homes: Enquiry";
//$replymsg = file_get_contents("sg_email.html");
//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;
$msg = 'Name : '.$owner.'<br>'; 
$msg .= 'Phone No: '.$phone.'<br>' ;
$msg .= 'E-Mail: '.$email.'<br>' ;
mail($email, $subject, $replymsg, $headers);
if(mail($to, $subject, $msg, $headers))
{
      
	header('Location: thankyou.html');exit;
				// echo "mail send";
			
			  }
?>
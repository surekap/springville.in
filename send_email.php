<?php 

//Mail sending function
	$name = $_REQUEST['name'];
	$text_msg = $_REQUEST['text_msg'];
	$mobile = $_REQUEST['mobile'];
	$email = $_REQUEST['email'];
	$to = $_POST['smm@surekaproperties.com'];
	$to .= 'rajan@surekaproperties.com' . ', ';
	$from = "smm@surekaproperties.com";
//data
$subject = "Sureka Properties: Enquiry";
//$replymsg = file_get_contents("sg_email.html");
//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;
$msg = 'Name : '.$name.'<br>'; 
$msg .= 'Address: '.$address.'<br>' ;
$msg .= 'Mobile No: '.$mobile.'<br>' ;
$msg .= 'E-Mail: '.$email.'<br>' ;

mail($email, $subject, $replymsg, $headers);
if(mail($to, $subject, $msg, $headers))
			  {
		         
				header('Location: thankyou.html');exit;
				// echo "mail send";
			
			  }
?>
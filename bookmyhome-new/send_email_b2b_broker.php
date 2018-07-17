<?php 

//Mail sending function
	$company_name = $_REQUEST['company_name'];
	$representative = $_REQUEST['representative'];
	$address = $_REQUEST['address'];
	$phone = $_REQUEST['phone'];
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];
	$postal_code = $_REQUEST['postal_code'];
	$country = $_REQUEST['country'];
	$fax = $_REQUEST['fax'];
	$email = $_REQUEST['email'];
	$mobile = $_REQUEST['mobile'];
	$communication_mode = $_REQUEST['communication_mode'];
	$dealing_in = $_REQUEST['dealing_in'];
	$others = $_REQUEST['others'];
	$to = $_POST['sales@surekaproperties.com'];
	$to .= 'nagpal@surekaproperties.com' . ', ';
	$to .= 'branding@surekaproperties.com ';
	$from = "sales@surekaproperties.com";
//data
$subject = "Sureka Properties: Enquiry";
//$replymsg = file_get_contents("sg_email.html");
//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;
$msg = 'Name of the company : '.$company_name.'<br>'; 
$msg .= 'Main representative: '.$representative.'<br>' ;
$msg .= 'Address: '.$address.'<br>' ;
$msg .= 'City: '.$city.'<br>' ;
$msg .= 'State / Province: '.$state.'<br>' ;
$msg .= 'Zip/Postal Code: '.$postal_code.'<br>' ;
$msg .= 'Country: '.$country.'<br>' ;
$msg .= 'Fax: '.$fax.'<br>' ;
$msg .= 'Email: '.$email.'<br>' ;
$msg .= 'Mobile: '.$mobile.'<br>' ;
$msg .= 'Preferred mode of communication: '.$communication_mode.'<br>' ;
$msg .= 'Dealing in: '.$dealing_in.'<br>' ;
$msg .= 'Others: '.$others.'<br>' ;

mail($email, $subject, $replymsg, $headers);
if(mail($to, $subject, $msg, $headers))
			  {
		         
				header('Location: thankyou.html');exit;
				// echo "mail send";
			
			  }
?>
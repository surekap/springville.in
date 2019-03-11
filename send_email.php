<?php 

 if(isset($_POST['submit']) && $_POST['submit'] == 'Send' ){
	 
 	 $name=$_POST['name'];
	 $email=$_POST['email'];
	 $phone=$_POST['phone'];
	 $comment=$_POST['comment'];
	 	
		     $to  = 'rajan@surekaproperties.com';
			 $subject="Springville - Contact Us Enquiry";
			$massege_body = "
			<table width='100%' border='0' cellspacing='0' cellpadding='0'>
			<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
			<tr><td>Hi</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Following Person filled the Enquiry from Sureka</td></tr>
			<tr><td>Name</td><td>:</td><td>".$name." </td></tr>
			<tr><td>Email</td><td>:</td><td>".$email."</td></tr>
			<tr><td>Phone Number</td><td>:</td><td>".$phone."</td></tr>
			<tr><td>Comment</td><td>:</td><td>".$comment."</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>Thanks</td></tr>
			<tr><td>&nbsp;</td></tr>";
			
			$massege_body .= "</table></td></tr></table>";
			
			 $my_message 		= "
			<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
			<html xmlns=\"http://www.w3.org/1999/xhtml\">
			<head>
			<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
			<title>Raghu Estates</title>
			</head>
			<?php <table width='100%' border='0' cellspacing='0' cellpadding='0'>
			<tr><td>".$massege_body."</td></tr>
			</table></body></html>";

				$reply_email='rajan@surekaproperties.com';
				$headers ="From: ".$reply_email."\n";
				$headers.="MIME-Version: 1.0\n";
				$headers.="Content-type: text/html; charset=iso 8859-1";
				$body	 = $my_message;
				$send 	 = mail($to,$subject,$body,$headers,"-f$reply_email");
				if($send){
					  echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
							<html xmlns="http://www.w3.org/1999/xhtml">
							<head>
							<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
							<title>Contact Query Submission</title>
							<script language="javascript">
							function update(){
								top.location = "'.thankyou.'";exit;
							}
							var refresh = setInterval("update()",3000);
							</script>
							</head>
							<body onload=refresh>
							<div align="center"><center>
							<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse;" bordercolor="#000000" bgcolor="#EBEBEB">
							<tr><td><b><font color="#006400">Thank you for submitting your enquiry.</font></b></td></tr></table>
							</center></div>
							<p align="center"><font face="Verdana" size="1" color="#666666">Please wait for a while..... You are being redirected! If not then click </font>
							<a href="javascript:update();" style="text-decoration: none;"><font face="Verdana" size="1" color="#3399FF">here</font></a>.</p>
							</body>
							</html>' ;
				}
				else{
					  echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
							<html xmlns="http://www.w3.org/1999/xhtml">
							<head>
							<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
							<title>Contact Query Submission</title>
							<script language="javascript">
							function update(){
								top.location = "'.thankyou.'";exit;
							}
							var refresh = setInterval("update()",3000);
							</script>
							</head>
							<body onload=refresh>
							<div align="center"><center>
							<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse;" bordercolor="#000000" bgcolor="#EBEBEB">
							<tr><td><b><font color=#FF0000>An Error Occured During Sending Your Request</font></b></td></tr></table>
							</center></div>
							<p align="center"><font face="Verdana" size="1" color="#666666">Please wait for a while..... You are being redirected! If not then click </font>
							<a href="javascript:update();" style="text-decoration: none;"><font face="Verdana" size="1" color="#3399FF">here</font></a>.</p>
							</body>
							</html>' ;
					}
}

     ?>
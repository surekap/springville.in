<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Springville</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/main.css">
  <link rel="stylesheet" href="stylesheets/app.css">

  <script src="javascripts/modernizr.foundation.js"></script>
  
  <!-- Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Exo+2:300' rel='stylesheet' type='text/css' />
  

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
	  
	  <style>
	  fieldset{
		  border: 0px;
		  border-top:1px solid black;
		  margin-top: 3em;
	  }
	  
	  fieldset legend{
		  padding: 1em;
		  margin-bottom: 1em;
	  }
	  </style>
	  
</head>
<body>

  <div class="row page_wrap">
    <!-- page wrap -->
    <div class="twelve columns">
      <!-- page wrap -->

      <div class="row">
        <div class="nine columns header_nav">
            <ul id="menu-header" class="nav-bar horizontal">
              <li><a href="index.html">Home</a></li>
			  
			  <li><a href="about.html">Who we are</a></li>
			  
			  <li class="has-flyout">
                <a href="#">Jajpur</a><a href="#" class="flyout-toggle"></a>

                <ul class="flyout">
                
                  <li class="has-flyout"><a href="fh_amenities.html">Amenities</a></li>
                  
                  <li class="has-flyout"><a href="fh_masterplan.html">Master Plan</a></li>
                  
                  <li class="has-flyout"><a href="fh_floorplan.html">Floor Plans</a></li>

                  <li class="has-flyout"><a href="fh_specifications.html">Specifications</a></li>
                  
                  <li class="has-flyout"><a href="fh_location.html">Location</a></li>

                </ul>
              </li>
		      
			  <li class="has-flyout">
                <a href="#">Bhubaneshwar</a><a href="#" class="flyout-toggle"></a>

                <ul class="flyout">
                
                  <li class="has-flyout"><a href="fg_features.html">Features</a></li>
                                    
                  <li class="has-flyout"><a href="fg_location.html">Location</a></li>

                </ul>
              </li>

            </ul><script type="text/javascript">
           //<![CDATA[
           $('ul#menu-header').nav-bar();
            //]]>
            </script>
          </div>
          
          <div class="three columns header_logo">
             <a href="http://www.springville.in/"><img src="images/logo.png" class="hide-for-small" alt="Springville" /></a>
          </div>
          
        </div><!-- END Header -->
		
		
<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "sales@springville.in";
 
    $email_subject = "Website Enquiry";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['phone']) ||
 
        !isset($_POST['location']) ||
			
		!isset($_POST['bhk']) ||
			
		!isset($_POST['budget']) ||
			
		!isset($_POST['loan']) ||		

		!isset($_POST['familiarity']) ||				
 
        !isset($_POST['occupation'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
	
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['phone']; // required
 
    $location = $_POST['location']; // required
 
    $bhk = $_POST['bhk']; // required
	
	    
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[0-9 .+-]+$/";
 
  if(!preg_match($string_exp,$telephone)) {
 
    $error_message .= 'The Mobile Phone you entered does not appear to be valid.<br />';
 
  }

    $string_exp = "/^[A-Za-z .'-]+$/";
  
  if(!preg_match($string_exp,$name)) {
  
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  
  }
    
    $string_exp = "/^[A-Za-z ]+$/";
  
  if(!preg_match($string_exp,$location)) {
  
    $error_message .= 'The Location you entered does not appear to be valid.<br />';
  
  }
  
    $string_exp = "/^[0-9A-Z ]+$/";
  
  if(!preg_match($string_exp,$bhk)) {
  
    $error_message .= 'The Number of Bedrooms you entered does not appear to be valid.<br />';
  
  }
  
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Location: ".clean_string($location)."\n";
 
	$email_message .= "Flat Type: ".clean_string($bhk)."\n";
     
 	$email_message .= "Budget: ".clean_string($budget)."\n";
	
	$email_message .= "Loan Required: ".clean_string($loan)."\n";
	
	$email_message .= "Brand Recall: ".clean_string($familiarity)."\n";
	
	$email_message .= "Employment: ".clean_string($occupation)."\n";			
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
 $headers .= 'Cc: smm@springville.in' . "\r\n";
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
<h1>Thank you for contacting us. We will be in touch with you very soon.</h1>
 
 
 
<?php
 
}
 
?>

	  <div class="row">
        <div class="twelve columns">
            <ul id="menu3" class="footer_menu horizontal">
  			<li class="">&copy; 2014 Springville</li>
  			<li class="">&nbsp;</li>
			
              <li class=""><a href="index.html">Home</a></li>
  			<li class=""><a href="privacy.html">Privacy Policy</a></li>
  			<li class=""><a href="disclaimer.html">Legal Disclaimer</a></li>
  			<li class=""><a href="tos.html">Terms of Service</a></li>
  			<li class=""><a href="feedback.html">Feedback</a></li>
  			<li class=""><a href="help.html">Help</a></li>
            </ul>
        </div>
        
		  <script type="text/javascript">
          //<![CDATA[
          $('ul#menu3').nav-bar();
          //]]>
          </script>

      </div>

    </div><!-- end page wrap) -->
    <!-- Included JS Files (Compressed) -->
    <script src="javascripts/foundation.min.js" type="text/javascript">
</script> <!-- Initialize JS Plugins -->
     <script src="javascripts/app.js" type="text/javascript">
</script>
  
</body>
</html>

<?php
ini_set('display_errors', 'off');
error_reporting(E_ALL);
define('COMP_EMAIL', 'info@system.com'); // clients email

define('MAIL_METHOD', 'PHPMAIL'); // SMTP or PHPMAIL (PHP Mail Function)
define('SMTP_SERVER', ''); // SMTP server
define('SMTP_USER', ''); // SMTP username
define('SMTP_PASSWD', ''); // SMTP password

define('SMTP_ENCRYPTION', 'off'); // TLS, SSL or off
define('SMTP_PORT', 587); // SMPT port number 587 or default
define('COMP_NAME', 'COMPANYNAME'); // company name
define('MAIL_TYPE', 2); // 1 - html, 2 - txt
define('MAIL_DOMAIN', 'web4.proweaverlinks.com/companyname'); // company domain

$recaptcha_sitekey = '6LeoXdwZAAAAAAOsa6EC54VCLJNnuz-TZXZhMMYc'; // Update it using a working google Site key
$recaptcha_privite = '6LeoXdwZAAAAAMDRk3bhiW3D1V0OlyifEKZPlRGN'; // Update it using a working google Privite key

//for from email
if(!empty($_POST['Email'])){
	$from = $_POST['Email'];
}else if(!empty($_POST['Email_Address'])){
	$from = $_POST['Email_Address'];
}else{
	$from = NULL;
}

// do not edit
$subject = COMP_NAME . " [" . $formname . "]";
$template = 'template';
$to_name = NULL;
$from_email = $from;
$from_name = 'Message From Your Site';
$attachments = array();

// testing here
$testform = true;
if($testform){
	// when using cc and/or bcc use string type to_email
	// cc and/or bcc can contain string or array type data
	// $to_email 	= 'qa@proweaver.net';
	$to_email 	= 'qatest@proweaver.net';
	$cc = '';
	$bcc = '';

	// when using multiple to_email use array type
	// cc and/or bcc will not be worked
	//$to_email 	= array('qa@proweaver.net', 'info@proweaver.com');
}else{
	$to_email 	= 'info@system.com';
	$cc = '';
	$bcc = '';
}

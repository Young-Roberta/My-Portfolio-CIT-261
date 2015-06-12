<?php
/*
 * A controller to handle the contact page processing
 */
 session_start();

if($_POST['action'] == 'Send'){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$country = $_POST['country'];
	$message = $_POST['message'];
	$captcha = $_POST['cap_code'];
	
	//Check the field that they are not empty//
	if (empty($name) || empty($email) || empty($address1) || empty($city) || empty($state) || empty($zip) || empty($country)){
			$errors['fields'] = 'All fields are required, please fill in each one.';	
	}
	
	
	//Check that the captcha code matched the picture//
	if ($_SESSION['security_code'] != $_POST['cap_code'] && !empty($_SESSION['security_code'])){
		$errors['security'] = 'Sorry, your entered security code does not match the security image.';	
	}
	//If there are errors, return the contact page to fix them//
	if (!empty($errors)){
		include 'registration.php';
		exit;
		
	}
	//Assemble the message//
	$finalmessage = "Name: $name \n";
	$finalmessage .= "Email: $email \n";
	$finalmessage .= "Address 1: $address1 \n";
	$finalmessage .= "Address 2: $address2 \n";
	$finalmessage .= "City: $city \n";
	$finalmessage .= "State: $state \n";
	$finalmessage .= "Zip: $zip \n";
	$finalmessage .= "Country: $country \n";
	$finalmessage .= "Message: \n $message";
	
	
	//Send the message//
	$to = 'cookinrobbie@gmail.com';
	$from = "From: $email";
	$result = mail($to, "new registration", $finalmessage, $from);
	
	// Let the sender know what happened//
	if ($result == TRUE){
		$errors[] = "Thank you $name for registering us!  We will send you a information packet soon that will include information on entrance fees and accommodations.";
	}else{
		$errors[] = "Sorry $name but there was an error and the message could not be sent.";	
	}

	//Remove all values previously stored//
	unset($name);
	unset($email);
	unset($address1);
	unset($address2);
	unset($city);
	unset($state);
	unset($zip);
	unset($country);
	unset($message);
	unset($captcha);
 
	include 'registration.php';

} else {
 include 'registration.php';
 exit;
}
?>


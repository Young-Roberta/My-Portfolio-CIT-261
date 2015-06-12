<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Registration Page | Prison to Prison Triathlon</title>
			<meta name="description" content="">
			<meta name="author" content="Roberta Young">
			<link href="/triathlon/css/triathlon_stylesheet.css" type="text/css" rel="stylesheet" media="screen">
<script type="text/JavaScript">
</script>
	</head>
		<header><?php include $_SERVER['DOCUMENT_ROOT'].'/triathlon/modules/header.php';?> </header>
		
	<main>
	
		<h1>Registration</h1>
		<p>Please fill in this form to register for the Prison to Prison Triathlon.  All fields are required.</p>
		<h3><u>This is not a real race</u>. Please don't include any sensitive information!</h3>
		<?php
			if(!empty($errors)){
					echo '<ul class="notify">';
					foreach($errors as $error){
							echo "<li>$error</li>";
						
					}
					echo '</ul>';
					unset($errors);	
			}
			?>
	<div id="forms">
		
		<form method="post" action="." id="contactform">
			<label for="name">Full Name:</label><br>
			<input type="text" name="name" id="name" size="50"
				value="<?php echo $name; ?>" required><br>
			<label for="email">Email:</label><br>
			<input type="email" name="email" id="email" size="50"
				value="<?php echo $email; ?>" required><br>
			<label for="address1">Address 1: </label><br>
			<input type="text" name="address1" id="address1" size="50"
				value="<?php echo $address1; ?>" required><br>
			<label for="address2">Address 2: </label><br>
			<input type="text" name="address2" id="address2" size="50"
				value="<?php echo $address2; ?>"><br>
			<label for="city">City: </label><br>
			<input type="text" name="city" id="city" size="50"
				value="<?php echo $city ?>" required><br>
			<label for="state">State/Province: </label><br>
			<input type="text" name="state" id="state" size="50"
				value="<?php echo $state; ?>" required><br>
			<label for="zip">Zip/Postal Code: </label><br>
			<input type="text" name="zip" id="zip" size="50"
				value="<?php echo $zip; ?>" required><br>
			<label for="country">Country: </label><br>
			<input type="text" name="country" id="country" size="50"
				value="<?php echo $country; ?>" required><br>

			<label for="message">Extra Information/Needs:</label><br>
			<textarea name="message" id="message" cols="52" rows="10" required>
				<?php echo $message; ?>
			</textarea><br>
			<label>&nbsp;</label>
			<img id="captcha" src="/triathlon/contact/captcha_images.php?width=100&amp;height=40&amp;characters=5"
				alt="captcha image"> (Type these characters into the text box below)<br>
			<label for="cap_code">Security Code:</label><br>
			<input id="cap_code" name="cap_code" type="text" size="6" required><br>
			<label for='action'>&nbsp;</label>
			<input type='submit' name="action" id='action' value="Send"><br>
		</form>
	</div>		
	</main>
	<footer> 
		<?php include $_SERVER['DOCUMENT_ROOT'].'/triathlon/modules/footer_p2p.php';?> 
	</footer>
</body>
</html>
		

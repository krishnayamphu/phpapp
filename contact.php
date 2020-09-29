<!DOCTYPE html>
<html>
<head>
    <title>PHPApp | Contact</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
require('header.php');
?>


<main>
	<div class="container">	
		<h3>Quick Contact</h3>
			<form>
				<label>Name</label>
				<input type="text" name="name">
				<br><br>

				<label>Contact</label>
				<input type="text" name="contact">
				<br><br>

				<label>Email</label>
				<input type="email" name="email">
				<br><br>

				<button type="Submit">Submit</button>
			</form>

			<h3>Location:</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14133.582206313296!2d85.30509023164618!3d27.67416697488893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19ccc9454ff9%3A0xf196445c0330168a!2sJawalakhel%2C%20Lalitpur%2044600!5e0!3m2!1sen!2snp!4v1601294893710!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>			
</main>

<?php
include('footer.php');
?>

</body>
</html>
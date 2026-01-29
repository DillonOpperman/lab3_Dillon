<!DOCTYPE html>
<html>
<head>
<title>Siri - PHP Version</title>
<link rel="stylesheet" href="style.css"> 
</head>
<body>
	<?php 
	$partner = "Google";
	$ai_model = "Google Gemini";
	$user = "Dillon";
	
    echo "<h1>Welcome to Apple</h1>";
    echo "<p>In 2026, we are proud to annouce that we are partnering with $partner to implement $ai_model to our lastest Siri.</p>";
 	?>
 
	<form action="confirm.php" method="POST">
		<label>
			Name:
			<input type="text" name="name" required />
		</label>
		<br>
		<label>
			Email:
			<input type="email" name="email" required />
		</label>
		<br>
		<label>
			Age:
			<input type="number" name="age" min="0" required />
		</label>
		<br>
		<input type="submit" value="Submit" />
	</form>
</body>
</html>




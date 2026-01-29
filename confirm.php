<!DOCTYPE html>
<html>
<head>
<title>Confirmation</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	$name = $_POST["name"] ?? "";
	$email = $_POST["email"] ?? "";
	$age = $_POST["age"] ?? "";
?>
	<h1>Submitted Details</h1>
	<ul>
		<li><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></li>
		<li><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></li>
		<li><strong>Age:</strong> <?php echo htmlspecialchars($age); ?></li>
	</ul>
	<a href="index.php">Back to form</a>
</body>
</html>

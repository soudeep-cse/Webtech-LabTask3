<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Action</title>
</head>
<body>

	<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			$flag = true;
			$email = sanitize($_POST['email']);
			$password = sanitize($_POST['password']);

			if (empty($email)) {
				echo "Please fill up the email properly";
				$flag = false;
			}
			else {
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo "This is not an email";
					$flag = false;
				}
			}
			if (empty($password)) {
				echo "Please fill up the password properly";
				$flag = false;	
			}
			if ($flag === true) {
                echo "<fieldset>";
                echo "<legend>LogIn: </legend>";
				echo $email;
                echo "<br>";
				echo $password;
                echo "</fieldset>";
			}
		}
		else {
			echo "Sorry Dear! You cannot Hack me!!!";
		}

		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

</body>
</html>
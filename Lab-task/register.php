<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Action</title>
</head>

<body>

    <?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			$flag = true;
            #General Information---------------------
			$firstname = sanitize($_POST['firstname']);
			$lastname = sanitize($_POST['lastname']);
            $fathername = sanitize($_POST['fathername']);
            $mothername = sanitize($_POST['mothername']);
            $gender = sanitize($_POST['gender']);
            $dob = sanitize($_POST['dob']);
            $bloodgroup = sanitize($_POST['bloodgroup']);
            #Contact Information-------------------------
            $email=sanitize($_POST['email']);
            $phone=sanitize($_POST['phone']);
            $website=sanitize($_POST['website']);
            $prasentaddress=sanitize($_POST['prasentaddress']);
            #Account Information-------------------------------
            $username=sanitize($_POST['username']);
            $password=sanitize($_POST['password']);

            #For General Information-------------------
			if (empty($firstname)) {
				echo "Please fill up First Name";
				$flag = false;
                echo "<br>";
			}
			
			if (empty($lastname)) {
				echo "Please fill up last name";
				$flag = false;	
                echo "<br>";
			}

            if (empty($fathername)) {
				echo "Please fill up father's name";
				$flag = false;	
                echo "<br>";
			}
  
            if (empty($mothername)) {
				echo "Please fill up mother's name";
				$flag = false;
                echo "<br>";	
			}

            if (empty($gender)) {
				echo "Please select gender";
				$flag = false;	
			}

            if (empty($dob)) {
				echo "Please select your date of birth";
				$flag = false;	
                echo "<br>";
			}

            if (empty($bloodgroup)) {
				echo "Please select your blood group";
				$flag = false;	
			}
            
            #For Contact Information--------------------
            if(empty($email)){
                echo "Please give your email";
                $flag = false;
                echo "<br>";
            }

            if(empty($phone)){
                echo "Please provide your phone number";
                $flag = false;
                echo "<br>";
            }
            if(empty($website)){
                echo "Please give your website name";
                $flag = false;
                echo "<br>";
            }
            if(empty($prasentaddress)){
                echo "Pleaseprovide your address";
                $flag = false;
                echo "<br>";
            }

            #Account Information------------------------------
            if(empty($username))
            {
                echo "Please enter your user name";
                $flag=false;
                echo "<br>";
            }

            if(empty($password))
            {
                echo "Please enter your password";
                $flag=false;
                echo "<br>";
            }

            #For output--------------
			if ($flag === true) {
                echo "<table align=center>";
                echo "<th>";

                #For general Information-----------
                echo "<fieldset>";
                echo "<legend>General Information: </legend>";
                echo "First Name: $firstname";
                echo "<br>";
				echo "Last Name: $lastname";
                echo "<br>";
                echo "Father's Name: $fathername" ;
				echo "<br>";
                echo "Mother's Name:  $mothername";
                echo "<br>";
                echo "Gender: $gender";
                echo "<br>";
                echo "Date of Birth: $dob" ;
                echo "<br>";
                echo "Blood Group: $bloodgroup" ;
                echo "<br><br>";
                echo "</fieldset>";

                #For Contact Information------------
                echo "<fieldset>";
                echo "<legend>Contact Information: </legend>";
                echo "Email: $email";
                echo "<br>";
				echo "Mobile/Phone: $phone";
                echo "<br>";
                echo "Website: $website" ;
				echo "<br>";
                echo "Present Address:  $prasentaddress";
                echo "<br><br>";
                echo "</fieldset>";

                #For Account Information--------------
                echo "<fieldset>";
                echo "<legend>Account information: </legend>";
                echo "User Name: $username";
                echo "<br>";
                echo "Password: $password";
                echo "<br>";
                echo "</fieldset>";

                echo "</th>";
                echo "</table>";
			}
		}
		else {
			echo "Sorry you can't access without my permission..............";
		}

		function sanitize($data) {
			$data1 = trim($data);
			$data1 = stripslashes($data);
			$data1 = htmlspecialchars($data);
			return $data;
		}
	?>

</body>

</html>
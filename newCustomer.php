<html>
<body>
	<!--<?php
		// define variables and set to empty values
		$name = $password = $confirmpassword = $password = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
		  $username = test_input($_POST["username"]);
		  $password = test_input($_POST["password"]);
		  $comfirmpassword = test_input($_POST["confirmpassword"]);
		  $email = test_input($_POST["email"]);
		}

		function test_input($data) 
		{
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
	?>-->
	
	<!--<?php
		echo "<h2>Your Input:</h2>";
		echo $username;
		echo "<br>";
		echo $password;
		echo "<br>";
		echo $confirmpassword;
		echo "<br>";
		echo $email;
	?>-->
	
	<?php
		echo "<h2>Your Input:</h2>";
		echo $_POST["username"];
		?>
</body>
</html>
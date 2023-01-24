
<!DOCTYPE html>
<html>

<head>
	<title>Insert</title>
</head>

<body>
	<center>
		<?php

		 
		$conn = mysqli_connect("localhost", "root", "", "personal_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		 
		$fname = $_REQUEST['fname'];
		$sname = $_REQUEST['sname'];
		$phone = $_REQUEST['phone'];
		$gender = $_REQUEST['gender'];
		 
		
		 
		$sql = "INSERT INTO  personaldetails_tb VALUES ('$fname',
			'$sname','$phone','$gender')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
			. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			//echo nl2br("\n$first_name\n $last_name\n "
				//. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>

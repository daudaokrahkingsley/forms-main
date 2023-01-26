
		<?php

		 
		$conn = mysqli_connect("localhost", "root", "", "personal_db");
		
		 
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		} 
		
		?>

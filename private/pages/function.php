<?php			
	//Add agent into the database
	//function insertAgent($objAgent, $databasename, $tablename){
		function insert($object, $databasename, $tablename){
		$dbconn = new mysqli('localhost', 'root', '',$databasename); //establish the connection with database 	
		if ($dbconn->connect_errno)
			print("Connection Problem: Cannot connect to database".$dbconn->connect_errno."<br>").$dbconn->connect_error."<br>";  
		else
			print("Connected to the database successfully"."<br>");	
				
		$value = $object->toString();
		$sql = "INSERT INTO $tablename() values('$value')";		
		$result= mysqli_query($dbconn,$sql);
		
		if($result) {
			print("Row is inserted");
			return true;
		}
		else{
			print("Row not inserted");
			return false;
		}		
		mysqli_close($dbconn);//close the connection
	}
	
	// //Add customer into the database
	// function insertCustomer($objCustomer, $databasename, $tablename){
		// $dbconn = new mysqli('localhost', 'root', '',$databasename); //establish the connection with database 	
		// if ($dbconn->connect_errno)
			// print("Connection Problem: Cannot connect to database".$dbconn->connect_errno."<br>").$dbconn->connect_error."<br>";  
		// else
			// print("Connected to the database successfully"."<br>");	
				
		// $value = $objCustomer->toString();	
		// $sql = "INSERT INTO $tablename() values('$value')";			
		// $result= mysqli_query($dbconn,$sql);
		// if($result) {
			// print("Row is inserted");
			// return true;
		// }
		// else{
			// print("Row not inserted");
			// return false;
		// }		
		// mysqli_close($dbconn);//close the connection
		// }
					
	// //Insert booking information into the database
	// function insertBooking($objBooking, $databasename, $tablename){
		// $dbconn = new mysqli('localhost', 'root', '',$databasename); //establish the connection with database 	
		// if ($dbconn->connect_errno)
			// print("Connection Problem: Cannot connect to database".$dbconn->connect_errno."<br>").$dbconn->connect_error."<br>";  
		// else
			// print("Connected to the database successfully"."<br>");	
				
		// $value = $objBooking->toString();
		// echo "VALUE: ".$value;
		
		// $sql = "INSERT INTO $tablename() values('$value')";		
		// $result= mysqli_query($dbconn,$sql);
		
		// if($result) {
			// print("Row is inserted");
			// return true;
		// }
		// else{
			// print("Row not inserted");
			// return false;
		// }		
		// mysqli_close($dbconn);//close the connection
	// }
	
	
		// //Insert credit card information into the database
		// function insertCreditCardInformation($objCreditCard,$databasename,$tablename){
		// $dbconn = new mysqli('localhost', 'root', '',$databasename); //establish the connection with database 	
		// if ($dbconn->connect_errno)
			// print("Connection Problem: Cannot connect to database".$dbconn->connect_errno."<br>").$dbconn->connect_error."<br>";  
		// else
			// print("Connected to the database successfully"."<br>");	
				
		// $value = $objCreditCard->toString();
		
		// $sql = "INSERT INTO $tablename() values('$value')";		
		// $result= mysqli_query($dbconn,$sql);
		
		// if($result) {
			// print("Row is inserted");
			// return true;
		// }
		// else{
			// print("Row not inserted");
			// return false;
		// }		
		// mysqli_close($dbconn);//close the connection
	// }
?>
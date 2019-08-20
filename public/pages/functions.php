<?php
/*----------------------------------------------------------------------------
						PHP scripts. 
						Authored by: Abhilash Paul
						Version: 1
						Date: 17th June 2019
---------------------------------------------------------------------------------*/
	require_once('db_credentials.php');

	function current_date(){
		date_default_timezone_set("America/Denver");					//sets the timezone to mountain time
        return date("Y M d");											//returns today's date
	}

	function db_connect(){
		$connection = mysqli_connect(db_server,db_user,db_pass,db_name);
		return $connection;												//connects to the database with credntials from config file db_credentials.php
	}

	function db_disconnect($connection){
		if(isset($connection)){
			mysqli_close($connection);									//closes the connection if it exists
		}
	}

	function calculatePackageDays($endDate, $startDate){
		return date('j',(strtotime($endDate)-strtotime($startDate)));	//returns differents in date in number days	
	}

	function formatPackagePrice($pkgPrice){
		//Formats currency values
		$fmt = new NumberFormatter('en_CA', NumberFormatter::CURRENCY); // creates new numberformat object
		$fmt->setTextAttribute(NumberFormatter::CURRENCY_CODE, 'CAD');  //sets its attibute to canadian dollar
		$fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 0);        //set the fraction_digits attribute to discard digits after the decimal points
		return $fmt->formatCurrency($pkgPrice, 'CAD');                  // return the format price
	}





//Functions used for daily project assignments. Remove at the end if these are not used.

	function insert_agent_details($table_name, $agent_details){
		$status_message="";
		//Connect to the database server
		$dbh = db_connect();
		//Query to insert the data from the associated array into the table
		$sql = sprintf('INSERT INTO %s (%s) VALUES ("%s")', 
				$table_name,
				implode(",", array_keys($agent_details)),
				implode('","', array_values($agent_details)));
		//Check if connection is established
		if ($dbh){
				//insert data 
				$result_set = mysqli_query($dbh, $sql);
				//rows affected?
				$rows = mysqli_affected_rows($dbh);
				//check if the row was inserted
				if ($result_set && $rows>0){
					$_SESSION['successful'] = 1;
					$status_message = "Success! Agent details are added to the databse.";
				} else{
					$status_message = "Failed! Error inserting row! Please try again";
				}
			} else {
				$status_message = "Unable to connect to the Database Server: ". mysqli_connect_error();
			}
		//return status message
		return $status_message;
		
	}

	function addAgent($table_name, Agent $agent){
		$status_message="";
		//Connect to the database server
		$dbh = db_connect();
		//Query to insert the data from the associated array into the table
		$sql = sprintf('INSERT INTO %s (AgtFirstName,AgtMiddleInitial,AgtLastName,AgtBusPhone,AgtEmail,AgtPosition,AgencyId,AgtUsername,AgtPassword) VALUES (%s)', $table_name, $agent);
		//Check if connection is established
		if ($dbh){
				//insert data 
				$result_set = mysqli_query($dbh, $sql);
				//rows affected?
				$rows = mysqli_affected_rows($dbh);
				//check if the row was inserted
				if ($result_set && $rows>0){
					$_SESSION['successful'] = 1;
					$status_message = "Success! Agent details are added to the databse.";
				} else{
					$status_message = "Failed! Error inserting row! Please try again";
				}
			} else {
				$status_message = "Unable to connect to the Database Server: ". mysqli_connect_error();
			}
		//return status message
		return $status_message;
	}

	function agentLogin()
	{   
		$user=$_POST['username'];
		$pwd_submitted=$_POST['password'];
		//connect to the database
		$dbh = db_connect();
		//query to get the password from the database for the submitted username
		$sql= "SELECT AgtPassword FROM agents WHERE AgtUsername='$user'";
		//execute the query
		$result=mysqli_query( $dbh, $sql) or die("Could not execute query: " .mysqli_error($dbh));
		$row = mysqli_fetch_row($result);
		//verify submitted password 
		if(password_verify($pwd_submitted,$row[0])){
			//got to the agent data form if password matches
			header('location: agentdataform.php');
			//start the session
			session_start();
			$_SESSION['user']=$user;
			$_SESSION['authenticated'] = true;		
		} else{
			//send the error message
			$_SESSION['message'] = "Login Failed. Please try again!";
		}
		db_disconnect($dbh); 
	}

	function agentRegister()
	{
		$agentid=(0+$_POST['agentid']);
		$user=$_POST['username'];
		$pwd=password_hash($_POST['password'], PASSWORD_DEFAULT);
		//connect to the database
		$dbh = db_connect();
		//query to get the password from the database for the submitted username
		$sql= "UPDATE agents SET username = '$user', password = '$pwd' WHERE AgentId=$agentid";
		//execute the query 
		$result=mysqli_query( $dbh, $sql) or die("Could not execute query: " .mysqli_error($dbh));
		//$row = mysql_affected_rows();
		//verify submitted password 
		if($result){
			//start the session if password matches
			$_SESSION['status'] = "Username '" . htmlentities($_POST['username']) . "' is successfully registered.";
			//import agent class
			require_once('classes.php');
			// get the object saved previously
			$newAgent_serialized = file_get_contents('agentobject');
			//unserialize to use the object
			$newAgent = unserialize($newAgent_serialized);
			//set the user name
			$newAgent->setUsername($_POST['username']);
			//set the password
			$newAgent->setPassword($_POST['password']);
		} else{
			//send the error message
			$_SESSION['status'] = "Registration Failed: ".mysqli_error($dbh);
		}
		//close the connection
		db_disconnect($dbh); 
	}

	
?>
<!--This page is used for inerting data recieved through form into the database-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add a new agent</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="normalize.css" /> 
        <link rel = "stylesheet" type = "text/css" href = "styles.css" />
        <script type="text/javascript" src="../scripts/script.js"></script>
    </head>
    <body>

        <!--Header: Logo and welcome message-->
        <?PHP include("agentpageheader.php"); ?>
		
		<?php
			//import the function to insert the data
			include("functions.php");
			// Table to which the data must be inserted
			$table_name = "agents";
			//incude agent class
			require_once('classes.php');
			//instantiate the object
			$newAgent = new Agent($_POST);
			//insert the data into the database
			$status_message = addAgent($table_name, $newAgent);
			//send a message 
			echo "<h1 class='statusmessage'>".$status_message."</h1>";
		?>
		<?php
			//If the agent details are inserted successfully print a message and some details of the newly added agent.
			//Also provides link to the page to create a new account for the agent
			if (isset($_SESSION['successful'])){
				//connect to the database
				$dbh = db_connect();
				//get the last entered agent details including auto created agent id
				$sql = "SELECT AgentId,AgtFirstName,AgtLastName,AgtBusPhone, AgtEmail FROM agents ORDER BY AgentId DESC LIMIT 1";
				
				if (isset($dbh)){
					//insert data 
					$result_set = mysqli_query($dbh, $sql);
					$row =mysqli_fetch_assoc($result_set);
					$newAgent->setAgentId($row['AgentId']);
					//serialize the object to save for later use
					$newAgent_serialized = serialize($newAgent);
					//save the serialized object into a file
					file_put_contents('agentobject', $newAgent_serialized);
					
				} else {
					//Display an error message if unable to coonetc to the database
					echo "Unable to connect to the Database Server: ". mysqli_connect_error();
					echo "<br/>";
				}

				//display the retrieved data in a table
				//table container
				echo "<div id=\"agenttablecontainer\" class='table-responsive-sm'>";
					//table definition
					echo "<table class='table table-sm' style='width:80%;margin-left:10%'>
					<thead>
						<tr>
							<th scope='col' style=text-align:center >ID</th>
							<th scope='col' style=text-align:center >First Name</th>
							<th scope='col' style=text-align:center >Last Name</th>
							<th scope='col' style=text-align:center >Phone Number</th>
							<th scope='col' style=text-align:center >Email</th>
						</tr>
					</thead>";
						echo "<tr>";
						foreach ($row as $field => $value) {
							echo "<td scope='row'>".$value."</td>";
						}
						echo "</tr>";
						
					echo "</table>";
				echo "</div>";
				
				//	Below section provides link to the page to create a new account for the agent
				//echo "<div id='createaccountmessage'><p>Create an account for ".$_POST['firstname']." (ID: ".$row['AgentId'].") : </p><a href=register.php>Go->>>></a></div>";
				//close the connection
				db_disconnect($dbh);
			}
		?>
		<?PHP
            //display user id
            //echo "<span id='userdisplay'>Logged in as: ".$_SESSION['user']."</span>";
		?>
		<!--Logout link-->
		<span class="border border-primary" id="logout"><a href="logout.php">Logout</a></span>

		<!--Copyright message-->
		<?PHP include("footer.php"); ?>
    
    </body>
</html>
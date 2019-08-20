<!-- Customer Login Page -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <title>Customer Login</title>
        <link type="text/css" rel="stylesheet" href="normalize.css" />
        <link rel = "stylesheet" type = "text/css" href = "styles.css" /> 
    </head>
    <body>
        <!--Header: Logo and welcome message-->
        <?PHP include("header.php"); ?>
        
        <!--Navigation Bar-->
        <nav class="navigation">
            <a class="btn btn-primary btn-lg" href="..\..\public\pages\index.php" role="button">Home</a>
		</nav>
		
        
        <!--Customer login form-->		
		<form action="" method="POST">
           <div id="loginformwrapper"> 
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
            </div>
			<div class="form-group" align="center">
				<input type="submit" name="submit" class="btn btn-primary" />   
			</div>
			<div class="form-group">
				<p>New to Travel Experts? &nbsp&nbsp</p> <a href="custregister.php">Sign Up</a>
			</div>
		  </div> 																							         
		 </form>
	    
		  		  
       <?php	
		if(isset($_POST['submit']))
		{
			$conn = mysqli_connect('localhost', 'root', '', 'travelexperts');	
			if($conn)
				echo "";
			else
			die("Connection failed because ".mysqli_connect_error());
		
			$user = $_POST['username'];
			$pass = $_POST['password'];
				
			$query = "SELECT * FROM customers WHERE CustUsername='$user'";	
			$result = mysqli_query($conn, $query);					
			$totalrows = mysqli_num_rows($result);		
	
				if($totalrows > 0)
				{
					if($row = mysqli_fetch_assoc($result))
					{										
						if($pass == $row['CustPassword']){
							isset($_SESSION['pkgid']) ? header('Location: orderPage.php'): header('Location: ..\..\public\pages\index.php');
							session_start();
							$_SESSION['user']=$user;
							$_SESSION['userfirstname']= $row['CustFirstName'];
							$_SESSION['authenticated'] = true;
						}
						else
							print "Please enter valid user id and password";
					}
				}
				else
				{
					echo "Please enter valid user id and password";
				}
		}
		?>
        <!--Copyright message-->
        <?PHP include("footer.php"); ?>
    </body>
</html>
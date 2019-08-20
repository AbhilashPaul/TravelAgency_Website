<!-- This page is used to create account for the new agent. -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <title>Welcome to Travel Experts</title>
        <link type="text/css" rel="stylesheet" href="normalize.css" />
        <link rel = "stylesheet" type = "text/css" href = "styles.css" /> 
    </head>
    <body>
        <!--Header: Logo and welcome message-->
        <?PHP include("agentpageheader.php"); ?>
        <!--Registartion form-->
        <div id="loginformwrapper">
            <form name="staffloginform" method="post" >
            <div class="form-group">
                <label for="agentid">Agent ID</label>
                <input type="text" class="form-control" name="agentid" id="agentid" placeholder="Enter Agent ID">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit" name="register" class="btn btn-primary">Register</button>
            </form>
        </div>
        <?php
            //load the functions and db credentials
            require_once('functions.php');
            //check if username and password is set
            if( isset($_POST['register']) ) {
                //call the function to register the new agent
                agentRegister();  
            }  
        ?>

        <?PHP
            //display the status message 
            if (isset($_SESSION['status'])){
                echo "<div class='alert alert-primary' role='alert'><p id=regitrationstatusmessage>".$_SESSION['status']."</p></div>";
                unset($_SESSION['status']);
            }; 
        ?>
        
        <!--Logout link-->
        <span class="border border-primary" id="logout"><a href="logout.php">Logout</a></span>
        
        <!--Copyright message-->
        <?PHP include("footer.php"); ?>
    </body>
</html>
<!--
Agent Login Page
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/6b50cebb5f.js"></script>
        <title>Agent Login</title>
        <link type="text/css" rel="stylesheet" href="normalize.css" />
        <link rel = "stylesheet" type = "text/css" href = "styles.css" /> 
    </head>
    <body>
        <!--Header: Logo and welcome message-->
        <?PHP include("agentpageheader.php"); ?>
        
        <!--Navigation Bar-->
        <nav class="navigation">
            <a href="..\..\public\pages\index.php"><i class="fas fa-home fa-2x"> Home</i></a>
        </nav>

        <!--Staff login form-->
        <div id="loginformwrapper">
            <form name="staffloginform" method="post" >
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    
        <?php
            //load the functions and db credentials
            require_once('functions.php');
            //check if username and password is set
            if( isset($_POST['username']) and isset($_POST['password']) ) {
                //call the login function 
                agentLogin();  
            }
                    
        ?>
        
        <?PHP
            //display the error message 
            if (isset($_SESSION['message'])){
                echo "<div class='alert alert-primary' role='alert'><p id=validitymessage>".$_SESSION['message']."</p></div>";
                unset($_SESSION['message']);
            }; 
        ?>

        <!--Copyright message-->
        <?PHP include("footer.php"); ?>
    </body>
</html>
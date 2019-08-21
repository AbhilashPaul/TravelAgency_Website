<!-- Home Page of the website. -->

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
        <?PHP include("header.php"); ?>
        
        <p id='marketingmessage'>Your next destination awaits!</p>

        <!--Marketing message-->
        <script type="text/javascript" src="../scripts/imageLoadScript.js"></script>
        
        <?PHP include("slideshow.php"); ?>
        
        <!--Invitation to connect-->
        <div id="message">
            <p>Contact us for information on how you can experience the best vacation yet!</p>
        </div>

        <!--Navigation Bar-->
        <nav id="navigation" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">Travel Experts</a>
                </div>
                <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <li><a href="links.php">External Links</a></li>
                <li><a href="..\..\private\pages\login.php">Agent Portal</a></li>
                </ul>
            </div>
        </nav>
         
    <!--Copyright message-->
    <?PHP include("footer.php"); ?>
    
    </body>
</html>
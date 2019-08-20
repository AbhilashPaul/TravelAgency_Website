<!-- Home Page of the website
    Authored by: Abhilash Paul;
    Version: 1;
    Date: 17th June 2019;
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/6b50cebb5f.js"></script>
        <title>Welcome to Travel Experts</title>
        <link rel = "stylesheet" type = "text/css" href = "../scripts/defaults.css" />
        <link rel = "stylesheet" type = "text/css" href = "../scripts/styles.css" />
        <link rel = "stylesheet" type = "text/css" href = "../scripts/style-card.css" /> 
    </head>
    <body>
        <!--Header: Logo and a welcome message-->
        <?PHP include("header.php"); ?>
        <!--Navigation Bar-->
        <nav id="navigation" class="navbar navbar-expand-lg navbar-dark navbar-fixed-top">
            <a class="navbar-brand" href="">Travel Experts</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menubar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menubar">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="..\..\private\pages\login.php">Agent Portal</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href=<?php session_start(); isset($_SESSION['userfirstname']) ? print("#") : print("..\..\private\pages\custregister.php");?>><i class="fas fa-user-plus"></i> Sign Up</a></li>
                    <li><a href=<?php isset($_SESSION['userfirstname']) ? print("#") : print("..\..\private\pages\custlogin.php");?>><i class="fas fa-sign-in-alt"></i> Login</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!--Display firstname of the user after logging in. Else, display Guest"-->
                            <strong>Hello <?php isset($_SESSION['userfirstname']) ? print($_SESSION['userfirstname']) : print("Guest");?>!</strong> 
                        </a>
                        <div class="dropdown-menu">
                            <!--Logout button -->
                            <a href="logout.php" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--Marketting section-->
        <div class="content-wrapper">
            <img class="img-fluid col-lg-12" src="../images/holiday.png" alt=""/>
            <div id="taglinewrapper" ><span id="tagline">Your <br />next<br /> destination<br />awaits..</span></div>
            <div id="dealsbutton"><a href="#travelpackages" role="button">Find latest deals...</a></div>
        </div>
        <!--List of vacation packages-->
        <?PHP include("vacationpackages.php"); ?>
        <!--Copyright message-->
        <?PHP include("footer.php"); ?>
        <div id="chosenPackage"></div>
        <script>
            //this eventhandler sends user selected package id and trip type to the booking page 
            
            $( ".order" ).on( "click", function() {
            $.ajax({
                url: 'slectedpackage.php',
                data: {packagename: $( this ).siblings('.pkg-name').text()},
                type: 'POST',
                success: function(data) {
                    //$user= response;
                    console.log(data);
                    //$('#chosenPackage').html(data);
                    
                    if(data == "1"){
                       window.location.href = "../../private/pages/orderPage.php";
                    } else {
                        window.location.href = "../../private/pages/custlogin.php";
                    }
                }
                });
            });
            
            //eventhandler that scrollls to the targeted section of the page when clicked on the hyperlink
            $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
            });
        </script>
    </body>
</html>
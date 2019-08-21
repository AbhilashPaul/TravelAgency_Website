<!--
Contact Us page of the website.
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <title>Contact Us - Travel Experts</title>
        <link type="text/css" rel="stylesheet" href="normalize.css" />
        <link rel = "stylesheet" type = "text/css" href = "styles.css" />   
    </head>
    <body>

        <!--Header: Logo and welcome message-->
        <?PHP include("header.php"); ?>
        
        <!--Navigation Bar
        <nav class="navigation">
            <div id="homeimagewrapper">
                <a class="hover" href=index.php><img id="homeimage" src=../images/homebutton.png alt="Link to Home Page"></a>
            </div>
            <div id="signupimagewrapper">
                <a class="hover" href=register.php><img id="signupimage" src=../images/register.png alt="Link to signup Page"></a>
            </div>
        </nav>
        -->

        <nav id="navigation" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">Travel Experts</a>
                </div>
                <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="contact.php">Contact Us</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <li><a href="links.php">External Links</a></li>
                <li><a href="..\..\private\pages\login.php">Agent Portal</a></li>
                </ul>
            </div>
        </nav>
        
        <!--Office locations and agent contact details-->
        <div id="contact"> 
            <h1>Visit us at the following locations...</h1>

            <!--Offlice locations-->
            <div id="calgary">
                <h2>Calgary</h2>
                <p>1155 8th Ave SW</p>
                <p>Calgary, AB T2P 1N3</p>
                <iframe class ="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.3847274439927!2d-114.09056018424701!3d51.045983579562105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716fe76e972489%3A0x149461cedf5b7c5b!2s1155+8+Ave+SW%2C+Calgary%2C+AB!5e0!3m2!1sen!2sca!4v1559501106434!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div id="okotoks">
                <h2>Okotoks</h2>
                <p>40 Elizabeth St</p>
                <p>Okotoks, AB T1S 2C1</p>
                <iframe class ="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.73653691242!2d-113.98168086222208!3d50.727375854361185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xda90d09e3a1b893e!2sOkotoks+Professional+Building!5e0!3m2!1sen!2sca!4v1559502590843!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

        <!--Agent directory-->
        <div id="agentdirectory">
            <p><b>Talk to one of our agents!</b></p>
            <ul>
                <li><b>Bryan Murphy</b>
                    <ul>
                        <li>Phone: 403-383-1042</li>
                        <li>Email: bryanmurphy@travelexperts.com</li>
                    </ul>
                </li>
                <li><b>Karen Graham</b>
                    <ul>
                            <li>Phone: 403-383-1043</li>
                            <li>Email: krengraham@travelexperts.com</li>
                    </ul>
                </li>
                <li><b>Jessica Stevens</b>
                    <ul>
                        <li>Phone: 778-813-1412</li>
                        <li>Email: jessicastevens@travelexperts.com</li>
                    </ul>
                </li>
                <li><b>David Scott</b>
                    <ul>
                        <li>Phone: 778-813-1413</li>
                        <li>Email: davidscott@travelexperts.com</li>
                    </ul>
                </li>
            </ul>
        </div>
    <!--Copyright message-->
    <?PHP include("footer.php"); ?>
    </body>
</html>
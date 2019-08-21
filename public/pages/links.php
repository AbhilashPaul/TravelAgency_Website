<!--
Links page.
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <title>External Links - Travel Experts</title>
        <link type="text/css" rel="stylesheet" href="normalize.css" />
        <link rel = "stylesheet" type = "text/css" href = "styles.css" />   
    </head>
    <body>
        <?php include("variables.php"); ?>
        <!--Navigation Bar
        <nav class="navigation">
            <div id="homeimagewrapper">
                <a class="hover" href=index.php><img id="homeimage" src=../images/homebutton.png alt="Link to Home Page"></a>
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
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <li class="active"><a href="links.php">External Links</a></li>
                <li><a href="..\..\private\pages\login.php">Agent Portal</a></li>
                </ul>
            </div>
        </nav>
        <!--Header: Logo and welcome message-->
        <?PHP include("header.php"); ?>

        <?PHP        
        echo "<div id=\"linkstablecontainer\">";
            echo "<table class='table table-borderless' style='width:60%; margin-left:20%; margin-top:10%;'>";

            foreach ($websites as $text => $url) {
                echo "<tr>";
                echo "<td>".$text."</td>";
                echo "<td><a href=".$url." target=\"_blank\">".$url."</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        echo "</div>"
        ?>
        <!--Copyright message-->
        <?PHP include("footer.php"); ?>
    </body>
</html>
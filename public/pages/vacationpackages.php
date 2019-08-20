<!-- This script retrieves travel packages details from database and displays them on home page.
    Authored by: Abhilash Paul;
    Version: 1;
    Date: 17th June 2019;
-->

<?php
    require_once('functions.php');          //load the functions and db credentials
    $dbh = db_connect();                    //connect to the database
    $thisDay = current_date();              //get today's date

    if (isset($dbh)){
        
        $sql= "SELECT * FROM packages";     //query to get the pasckage details
        $result_set = mysqli_query( $dbh, $sql) or die("Could not execute query: " .mysqli_error($dbh)); //execute the query
        
        echo '<section id="travelpackages">';
        echo '<div id="packagestitle"><p>Travel Packages</p></div>';
        echo '<main class="main-area">';         //Define packages display area layout
        echo '<div class="centered">';          //this div holds all the cards
        echo '<section class="cards" id="packagecards">';         // this is where all package cards will be displayed
        
        while ($obj=mysqli_fetch_object($result_set)) {  
                                                //display the packages if the end date is greater than or equal to today's date
            if (strtotime($obj->PkgEndDate) >= strtotime($thisDay)){
                echo   '<article class="card">
                            <div class="card-content">
                                <h3 class="pkg-name">'.$obj->PkgName.'</h3>
                                <p class="pkg-details">'.$obj->PkgDesc.'</p>
                                <p>'.calculatePackageDays($obj->PkgEndDate, $obj->PkgStartDate).' Days</p>
                                <p>From: '.date('Y M d',strtotime($obj->PkgStartDate)).'</p>
                                <p>To: '.date('Y M d',strtotime($obj->PkgEndDate)).'</p>
                                <p class="pkg-price">Price: '.formatPackagePrice($obj->PkgBasePrice).'/person</p>
                                <a type="button" class="order btn btn-primary">Book Online Now!</a>
                            </div><!-- .card-content -->
                    </article><!-- .card -->';
            }
        }

        echo '</section>';
        echo '</div>';
        echo '</main>';
        echo '</section>';
        mysqli_free_result($result_set);       // Free result set
    } else {
        echo "Unable to connect to the Database Server: ". mysqli_connect_error(); //Display an error message if unable to coonetc to the database
    }
    db_disconnect($dbh);                  //close the connection
?>


<?php 
/*
    PHP script to retrieve package id and trip type ID of user selected package and pass it for insertion of booking details. 
    Authored by: Abhilash Paul;
    Version: 1;
    Date: 17th June 2019;
*/

//echo "You have chosen: ".$_POST['packagename']; 
$packageName = $_POST['packagename'];
//load the functions and db credentials
require_once('functions.php');
    
//connect to the database
$dbh = db_connect();

if (isset($dbh)){
    //query to get the pasckage details
    $sql= "SELECT * FROM packages WHERE PkgName = '$packageName'";
    //execute the query
    $result = mysqli_query( $dbh, $sql) or die("Could not execute query: " .mysqli_error($dbh));
    if($row = mysqli_fetch_assoc($result)){
        session_start();
        $_SESSION['pkgid']=$row['PackageId'];
        $_SESSION['triptypeid'] = $row['TripTypeId'];
        if(isset($_SESSION['authenticated'])){
            echo $_SESSION['authenticated'];
        }
    }
} else {
    //Display an error message if unable to coonetc to the database
    echo "Unable to connect to the Database Server: ". mysqli_connect_error();
}

 // Free result set
 mysqli_free_result($result);

//close the connection
db_disconnect($dbh);

?>
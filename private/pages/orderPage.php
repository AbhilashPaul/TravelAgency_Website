<!DOCTYPE  html>
<html>
	<head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">       
		<title>Order Package</title>
        <link type="text/css" rel="stylesheet" href="normalize.css" />
        <link rel = "stylesheet" type = "text/css" href = "styles.css" /> 
		
		<script>
			// if credit card option is clicked then credit card information is shown.
			function showCredit(){
				document.getElementById("creditInfo").style.display = "block";
				}
		</script>
    </head>
    <body onload="window_onload()">	
        <!--Header: Logo and welcome message-->
		<?PHP include("header.php"); ?>
		<?php
		
		session_start();
		?>
        
        <!--Navigation Bar-->
        <nav class="navigation">
            <a class="btn btn-primary btn-lg" href="..\..\public\pages\index.php" role="button">Home</a>
        </nav>
		
		 <form action=" " method="POST" >
		 <fieldset>
		  <legend>Passenger Information:</legend>
		   <div class="formrow">
                <div class="labels">
                    <label id="firstname-label" for="firstname">First Name: </label>
                </div>
				 <div class="forminput">
                   <input autofocus type="text" name="firstname" id="firstname" class="input-field" autocomplete="off" onfocus="displayNote('firstname','firstnamefieldnote')" onblur="hideNote('firstname','firstnamefieldnote');">
                 </div>
                <div id="firstnamefieldnote" class="fielddescription">
                     <p>"Must match passport"</p>
                </div>
            </div>
			<div class="formrow">
                <div class="labels">
                    <label id="middlename-label" for="middlename">Middle Name: </label>
                </div>
                <div class="forminput">
                    <input autofocus type="text" name="middlename" id="middlename" class="input-field" autocomplete="off" onfocus="displayNote('middlename','middlenamefieldnote')" onblur="hideNote('middlename','middlenamefieldnote');">
                 </div>
                <div id="middlenamefieldnote" class="fielddescription">
                     <p>"Must match passport"</p>
                </div>
            </div>
			<div class="formrow">
                <div class="labels">
                    <label id="lastname-label" for="lastname">Last Name: </label>
                </div>
                <div class="forminput">
                    <input type="text" name="lastname" id="lastname" class="input-field" autocomplete="off" onfocus="displayNote('lastname','lastnamefieldnote')" onblur="hideNote('lastname','lastnamefieldnote');">
                </div>
                <div id="lastnamefieldnote" class="fielddescription">
                    <p>"Must match passport"</p>
                </div>
             </div>
			<div class="formrow">
                <div class="labels">
                    <label id="birthdate-label" for="birthdate">Birthdate: </label>
                </div>
                <div class="forminput">
                    <input autofocus type="date" name="birthdate" id="birthdate" class="input-field" autocomplete="off" onfocus="displayNote('birthdate','birthdatefieldnote')" onblur="hideNote('birthdate','birthdatefieldnote');">
                 </div>
                <div id="birthdatefieldnote" class="fielddescription">
                     <p>"Must match passport"</p>
                </div>
            </div>
	   </fieldset>	   
	   <fieldset>
		  <legend>Payment Options:</legend>			
			<a href="https://www.paypal.com/ca/home" target="_blank"> <img src="paypal.png" alt="paypal" height="40" width="200"> </a><br><br><br>
			<img src="creditcard.png" onclick="showCredit()"  alt="credit card" height="40" width="200"> </a><br>					
	   </fieldset>		   						
	<div id="creditInfo" style="display:none">	
	  <div class="formrow" >
        <div class="labels">
			<label id="creditcardtype-label" for="creditcardtype">Credit Card Type: </label>
        </div>
        <div class="forminput">
		<select style="width:270px">
			<option value="1">Master Card</option>
			<option value="2">Visa Card</option>
			<option value="4">American Express</option>
		</select>
		</div>
	  </div>
	  <div class="formrow">
		<div class="labels">
			<label id="creditcardnumber-label" for="creditcardnumber">Credit Card Number: </label>
		</div>
		<div class="forminput">
			<input autofocus type="text" name="creditcardnumber" id="creditcardnumber" class="input-field" autocomplete="off" onfocus="displayNote('creditcardnumber','creditcardnumberfieldnote')" onblur="hideNote('creditcardnumber','creditcardnumberfieldnote');">
		</div>
	  </div>
	  <div class="formrow">
		<div class="labels">
			<label id="creditcardname-label" for="creditcardname">Name on Credit Card: </label>
		</div>
		<div class="forminput">
			<input autofocus type="text" name="creditcardname" id="creditcardname" class="input-field" autocomplete="off" onfocus="displayNote('creditcardname','creditcardnamefieldnote')" onblur="hideNote('creditcardname','creditcardnamefieldnote');">
		</div>
	  </div>
	  <div class="formrow">
		<div class="labels">
			<label id="expirydate-label" for="expirydate">Expirty Date: </label>
		</div>
		<div class="forminput">
			<input autofocus type="date" name="expirydate" id="expirydate" class="input-field" autocomplete="off" onfocus="displayNote('expirydate','expirydatefieldnote')" onblur="hideNote('expirydate','expirydatefieldnote');">
		</div>
	  </div>
	  <div class="formrow">
		<div class="labels">
			<label id="security-label" for="security">Security Number: </label>
		</div>
		<div class="forminput">
			<input autofocus type="text" name="security" id="security" class="input-field" autocomplete="off" onfocus="displayNote('security','securityfieldnote')" onblur="hideNote('security','securityfieldnote');">
		</div> 
	 </div>		
		</div>	
		 <div  align="center">
			<input type="submit" name="submit" class="btn btn-primary" value="Submit" />
			<input type="button" name="cancel" value="cancel"  class="btn btn-primary" onClick="window.location='../../public/pages/index.php';" />
		</div>
	</form>			
	<?php
		
		echo $_SESSION['pkgid']."<br/>";
		echo $_SESSION['triptypeid']."<br/>";
		echo $_SESSION['user']."<br/>";	
	
		if(isset($_POST['submit']))
		{
			include 'class.php';
			include 'function.php';
		
			$databasename='travelexperts';				
			$bDate = date("Y/m/d"); //Current date		
			$travelerCount = 1; //assumption as mentioned in workshop#2
			
			$bid = " "; //NOT SURE
			$bookingNo = 'f'; //NOT SURE			
			//Add credit card type in creditcards table????
			//Add security in creditcards table??????
					
			$tablename='creditcards';		
			$customerId = "107"; // FOREIGN KEY CONSTRAINT for creditcards table
			//$objCreditCard = new Credit(" ",$_POST['creditcardname'], $_POST['creditcardnumber'],$_POST['expirydate'],$customerId);
			$object = new Credit(" ",$_POST['creditcardname'], $_POST['creditcardnumber'],$_POST['expirydate'],$customerId);
		
			//insert into creditcards table in the database		
		//	$message = insertCreditCardInformation($objCreditCard,$databasename,$tablename); //call insertCreditCardInformation() of function.php 
			$message = insert($object,$databasename,$tablename); //call insertCreditCardInformation() of function.php 
		
			if($message == "1")
					echo "<br/>"."Message: Successful";
				else
					echo "<br/>"."Message: Failed";							
														
		
			$tablename='bookings';
			$tripTypeId = $_SESSION['pkgid']; // FOREIGN KEY CONSTRAINT for booking table
			$packageId =$_SESSION['triptypeid']; // FOREIGN KEY CONSTRAINT for bookings table

			$objBooking = new Booking($bid, $bDate, $bookingNo, $travelerCount, $customerId, $tripTypeId, $packageId, $_POST['firstname'], $_POST['middlename'], $_POST['lastname'], $_POST['birthdate']);						
			
	    	// insert into bookings table in the database
			$message = insert($objBooking,$databasename,$tablename); //call insertBooking() of function.php 
					
				if($message == "1")
					echo "<br/>"."Message: Successful";
				else
					echo "<br/>"."Message: Failed";										
		}
		?>
	<!--Copyright message-->
        <?PHP include("footer.php"); ?>
    </body>
</html>
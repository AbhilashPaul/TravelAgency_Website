<!-- Contact Us page of the website. -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <title>Register With Us</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="normalize.css" /> 
        <link rel = "stylesheet" type = "text/css" href = "styles.css" />
        <script type="text/javascript" src="../scripts/script.js"></script>
    </head>
    <body>

        <!--Header: Logo and welcome message-->
        <?PHP include("header.php"); ?>

        <!--Navigation Bar-->
        <nav class="navigation">
            <a class="btn btn-primary btn-lg" href="..\..\public\pages\index.php" role="button">Home</a>
        </nav> 

        <!--Area outside the form-->
        <div id="registrationformwrapper" >
            <div id="form-outer">
                <h1 id="formtitle">Customer Signup Form</h1>

                    <!--Start of Registration Form-->
                    <form action=" " method="post" >

						 <!--First Name-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="username-label" for="username">* User Name: </label>
                            </div>
                            <div class="forminput">
                                <input autofocus type="text" name="username" id="username" class="input-field" autocomplete="off" onfocus="displayNote('username','usernamefieldnote')" onblur="hideNote('username','usernamefieldnote');">
                            </div>
                            <div id="usernamefieldnote" class="fielddescription">
                                <p>"5 letter with 1 digit user-name allowed"</p>
                            </div>
                        </div>
						
						 <!--First Name-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="password-label" for="firstname">* Password: </label>
                            </div>
                            <div class="forminput">
                                <input autofocus type="password" name="password" id="password" class="input-field" autocomplete="off" onfocus="displayNote('password','passwordfieldnote')" onblur="hideNote('password','passwordfieldnote');">
                            </div>
                            <div id="passwordfieldnote" class="fielddescription">
                                <p>"5-digits password allowed"</p>
                            </div>
                        </div>
					
                        <!--First Name-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="firstname-label" for="firstname">* First Name: </label>
                            </div>
                            <div class="forminput">
                                <input autofocus type="text" name="firstname" id="firstname" class="input-field" autocomplete="off" onfocus="displayNote('firstname','firstnamefieldnote')" onblur="hideNote('firstname','firstnamefieldnote');">
                            </div>
                            <div id="firstnamefieldnote" class="fielddescription">
                                <p>"Enter your first name"</p>
                            </div>
                        </div>
                       
                        <!--Last Name-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="lastname-label" for="lastname">* Last Name: </label>
                            </div>
                            <div class="forminput">
                                <input type="text" name="lastname" id="lastname" class="input-field" autocomplete="off" onfocus="displayNote('lastname','lastnamefieldnote')" onblur="hideNote('lastname','lastnamefieldnote');">
                            </div>
                            <div id="lastnamefieldnote" class="fielddescription">
                                <p>"Enter your last name"</p>
                            </div>
                        </div>                      

                        <!--Email-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="email-label" for="email">* Email: </label>
                            </div>
                            <div class="forminput">
                                <input type="text" name="email" id="email" class="input-field" autocomplete="off" onfocus="displayNote('email','emailfieldnote')" onblur="hideNote('email','emailfieldnote');">
                            </div>
                            <div id="emailfieldnote" class="fielddescription">
                                <p>"Enter your email id"</p>
                            </div>
                        </div>
                                               
                        <!--Home Phone Number-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="phonenumber-label" for="phonenumber">* Home Phone#: </label>
                            </div>
                            <div class="forminput">
                                <input type="text" name="phonenumber" id="phonenumber" name="phonenumber" class="input-field" autocomplete="off" onfocus="displayNote('phonenumber','phonenumberfieldnote')" onblur="hideNote('phonenumber','phonenumberfieldnote');">
                            </div>
                            <div id="phonenumberfieldnote" class="fielddescription">
                                <p>"Enter your phone number (eg: 4034025684)"</p>
                            </div>
                        </div>
						
						 <!--Business Phone Number-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="bphonenumber-label" for="bphonenumber">Business Phone#: </label>
                            </div>
                            <div class="forminput">
                                <input type="text" name="bphonenumber" id="bphonenumber" name="bphonenumber" class="input-field" autocomplete="off" onfocus="displayNote('bphonenumber','bphonenumberfieldnote')" onblur="hideNote('bphonenumber','bphonenumberfieldnote');">
                            </div>
                            <div id="bphonenumberfieldnote" class="fielddescription">
                                <p>"Enter your business phone number (eg: 4034025684)"</p>
                            </div>
                        </div>
                       
                        
                        <!--Address-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="address-label" for="address">Address: </label>
                            </div>
                            <div class="forminput">
                                <input type="text" class="input-field" name="address" id="address" autocomplete="off" onfocus="displayNote('address','addressfieldnote')" onblur="hideNote('address','addressfieldnote')">
                            </div>
                            <div id="addressfieldnote" class="fielddescription">
                                <p>"Enter address: Building number, Street Name, etc.."</p>
                            </div>
                        </div>
                        
                        <!--City-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="city-label" for="city">City: </label>
                            </div>
                            <div class="forminput">
                                <input type="text" name="city" id="city" class="input-field" autocomplete="off" onfocus="displayNote('city','cityfieldnote')" onblur="hideNote('city','cityfieldnote')">
                            </div>
                            <div id="cityfieldnote" class="fielddescription">
                                <p>"Enter the name of the city you're living in"</p>
                            </div>
                        </div>

						
						    <!--City-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="city-label" for="city">City: </label>
                            </div>
                            <div class="forminput">
							 <select name="province" name="province" style="width:275px" onfocus="displayNote('province','provincefieldnote')" onblur="hideNote('province','provincefieldnote')">
                                    <option value="AB">Alberta</option>                            
                                    <option value="MB">Manitoba</option>                                  
                                    <option value="NU">Nunavut</option>
                                    </select>
                            </div>
                            <div id="provincefieldnote" class="fielddescription">
                                <p>"Enter the name of the province"</p>
                            </div>
                        </div>
						
                      
                        <!--Postal Code-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="postalcode-label" for="postalcode">Postal Code: </label>
                            </div>
                            <div class="forminput">
                                <input type="text" name="postalcode" id="postalcode" class="input-field" autocomplete="off" onfocus="displayNote('postalcode','postalcodefieldnote')" onblur="hideNote('postalcode','postalcodefieldnote');">
                            </div>
                            <div id="postalcodefieldnote" class="fielddescription">
                                <p>"Enter the postal code (eg: T2M 2L4)"</p>
                            </div>
                        </div>
                      
					   <!--Email-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="email-label" for="email">Country: </label>
                            </div>
                            <div class="forminput">
                                <input type="text" name="country" id="country" class="input-field" autocomplete="off" onfocus="displayNote('country','countryfieldnote')" onblur="hideNote('country','countryfieldnote');">
                            </div>
                            <div id="countryfieldnote" class="fielddescription">
                                <p>"Enter your country"</p>
                            </div>
                        </div>

                        <!--Submit and Reset buttons-->
                        <div id="buttons">
					        <button id="submit" type="submit">Sign up</button>
                            <button  id="reset" type="reset">Reset</button>
                        </div>                        
                    </form>
            </div>
        </div>
		 <?php
		 if(isset($_POST['submit']))
		{
			//include 'customer.php';
			//include 'custFunctions.php';
			include 'class.php';
			include 'function.php';
			$custid=" "; //agent is auto-incremented in database.
			$custpass = $_POST['password'];
			$agtid = 1; //hard coded for now
			$object = (object)$_POST;
				
			$object = new Customer($custid,$object,$agtid,$custpass); //don't have agent id and agent password in my addAgent form.			
				
			$databasename='travelexperts';	
			$tablename='customers';
			$message = insert($object,$databasename,$tablename); //call insertAgent() of functions.php 
			echo $message;			
			if($message == "1")
			{
				header('Location: custlogin.php');
				exit();
			}
			else
			{
				echo "Username already exists. Please choose different username.";
			}
		}
       ?>
        <!--Copyright message-->
        <?PHP include("footer.php"); ?>  
    </body>
</html>
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
    </head>
    <body>

        <!--Header: Logo and welcome message-->
        <?PHP include("header.php"); ?>

        <!-- Navigation Bar -->
        <nav id="navigation" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">Travel Experts</a>
                </div>
                <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li class="active"><a href="register.php">Sign Up</a></li>
                <li><a href="links.php">External Links</a></li>
                <li><a href="..\..\private\pages\login.php">Agent Portal</a></li>
                </ul>
            </div>
        </nav>

        <!--Area outside the form-->
        <div id="registrationformwrapper">
            <div id="form-outer">
                <h1 id="formtitle">Sign up to recieve our newsletters...</h1>

                    <!--Start of Registration Form-->
                    <form id="registrationform" onsubmit="return validateRegistrationForm();" action="bouncer.php" method="post" >

                        <!--First Name-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="firstname-label" for="firstname">* First Name: </label>
                            </div>
                            <div class="forminput">
                                <input autofocus type="text" name="firstname" id="firstname" class="input-field" onfocus="displayNote('firstname','firstnamefieldnote')" onblur="hideNote('firstname','firstnamefieldnote');">
                            </div>
                            <div id="firstnamefieldnote" class="fielddescription">
                                <p>"Enter your first name"</p>
                            </div>
                        </div>
                        <div class="formvalidationmessage">
                            <p>"Please provide your First Name!"</p>
                        </div>

                        <!--Last Name-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="lastname-label" for="lastname">* Last Name: </label>
                            </div>
                            <div class="forminput">
                                <input type="text" name="lastname" id="lastname" class="input-field" onfocus="displayNote('lastname','lastnamefieldnote')" onblur="hideNote('lastname','lastnamefieldnote');">
                            </div>
                            <div id="lastnamefieldnote" class="fielddescription">
                                <p>"Enter your last name"</p>
                            </div>
                        </div>
                        <div class="formvalidationmessage">
                            <p>"Please provide your Last Name!"</p>
                        </div>

                        <!--Email-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="email-label" for="email">* Email: </label>
                            </div>
                            <div class="forminput">
                                <input type="text" name="email" id="email" class="input-field" onfocus="displayNote('email','emailfieldnote')" onblur="hideNote('email','emailfieldnote');">
                            </div>
                            <div id="emailfieldnote" class="fielddescription">
                                <p>"Enter your email id"</p>
                            </div>
                        </div>
                        <div class="formvalidationmessage">
                            <p>"Email address is required!"</p>
                        </div>
                        
                        <!--Phone Number-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="phonenumber-label" for="phonenumber">* Phone Number: </label>
                            </div>
                            <div class="forminput">
                                <input type="text" name="phonenumber" id="phonenumber" name="phonenumber" class="input-field" placeholder="i.e. XXXXXXXXXX" onfocus="displayNote('phonenumber','phonenumberfieldnote')" onblur="hideNote('phonenumber','phonenumberfieldnote');">
                            </div>
                            <div id="phonenumberfieldnote" class="fielddescription">
                                <p>"Enter your phone number (eg: 4034025684)"</p>
                            </div>
                        </div>
                        <div class="formvalidationmessage">
                            <p>"Phone Number is required!"</p>
                        </div>
                        
                        <!--Address-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="address-label" for="address">Address: </label>
                            </div>
                            <div class="forminput">
                                <input type="text" class="input-field" name="address" id="address" onfocus="displayNote('address','addressfieldnote')" onblur="hideNote('address','addressfieldnote')">
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
                                <input type="text" name="city" id="city" class="input-field" onfocus="displayNote('city','cityfieldnote')" onblur="hideNote('city','cityfieldnote')">
                            </div>
                            <div id="cityfieldnote" class="fielddescription">
                                <p>"Enter the name of the city you're living in"</p>
                            </div>
                        </div>

                        <!--Province-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="province-label" for="province">Province: </label>
                            </div>
                            <div class="forminput">
                                <select name="province" name="province" id="province" onfocus="displayNote('province','provincefieldnote')" onblur="hideNote('province','provincefieldnote')">
                                    <option value></option>
                                    <option value="AB">Alberta</option>
                                    <option value="BC">British Columbia</option>
                                    <option value="MB">Manitoba</option>
                                    <option value="NB">New Brunswick</option>
                                    <option value="NL">Newfoundland and Labrador</option>
                                    <option value="NS">Nova Scotia</option>
                                    <option value="NT">Northwest Territories</option>
                                    <option value="NU">Nunavut</option>
                                    <option value="ON">Ontario</option>
                                    <option value="PE">Prince Edward Island</option>
                                    <option value="QC">Quebec</option>
                                    <option value="SK">Saskatchewan</option>
                                    <option value="YT">Yukon</option>
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
                                <input type="text" name="postalcode" id="postalcode" class="input-field" placeholder="i.e. X1X 1X1" onfocus="displayNote('postalcode','postalcodefieldnote')" onblur="hideNote('postalcode','postalcodefieldnote');">
                            </div>
                            <div id="postalcodefieldnote" class="fielddescription">
                                <p>"Enter the postal code (eg: T2M 2L4)"</p>
                            </div>
                        </div>
                        <div class="formvalidationmessage">
                            <p>"Please enter a valid postal code!"</p>
                        </div>

                        <!--Submit and Reset buttons-->
                        <div id="buttons">
                            <button onclick="return confirmSubmission()" id="submit" type="submit">Submit</button>
                            <button onclick="return confirmReset()"  id="reset" type="reset">Reset</button>
                        </div>
                        
                    </form>
            </div>
        </div>
        <!--Copyright message-->
        <?PHP include("footer.php"); ?>
        <script type="text/javascript" src="../scripts/customerRegistraionScript.js"></script>
    </body>
</html>
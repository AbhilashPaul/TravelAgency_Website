<!-- Contact Us page of the website. -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add a new agent</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link type="text/css" rel="stylesheet" href="normalize.css" /> 
        <script src="https://kit.fontawesome.com/6b50cebb5f.js"></script>
        <link rel = "stylesheet" type = "text/css" href = "styles.css" />
        <script type="text/javascript" src="../scripts/script.js"></script>
    </head>
    <body>

        <!--Header: Logo and welcome message-->
        <?PHP include("agentpageheader.php"); ?>

        <!--Area outside the form-->
        <div id="registrationformwrapper">
            <div id="form-outer">
                <h1 id="formtitle">Add a new agent to the directory</h1>

                    <!--Start of Registration Form-->
                    <form id="addagentform" onsubmit="return validateForm();" action="insertagentdata.php" method="post" >

                        <!--First Name-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="firstname-label" for="firstname">* First Name: </label>
                            </div>
                            <div class="forminput">
                                <input autofocus type="text" name="firstname" id="firstname" class="input-field" onfocus="displayNote('firstname','firstnamefieldnote')" onblur="hideNote('firstname','firstnamefieldnote');">
                            </div>
                            <div id="firstnamefieldnote" class="fielddescription">
                                <p>"Enter the first name"</p>
                            </div>
                        </div>
                        <div class="formvalidationmessage">
                            <p>"Please provide a First Name!"</p>
                        </div>

                        <!--Middle Name-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="middlename-label" for="middlename">Middle Name Initial: </label>
                            </div>
                            <div class="forminput">
                                <input type="text" name="middlename" id="middlename" class="input-field" onfocus="displayNote('middlename','middlenamefieldnote')" onblur="hideNote('middlename','middlenamefieldnote');">
                            </div>
                            <div id="middlenamefieldnote" class="fielddescription">
                                <p>"Enter Middle name initial"</p>
                            </div>
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
                                <p>"Enter the last name"</p>
                            </div>
                        </div>
                        <div class="formvalidationmessage">
                            <p>"Please provide a Last Name!"</p>
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
                                <p>"Enter an email id"</p>
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
                                <input type="text" name="phonenumber" id="phonenumber" class="input-field" placeholder="i.e. XXXXXXXXXX" onfocus="displayNote('phonenumber','phonenumberfieldnote')" onblur="hideNote('phonenumber','phonenumberfieldnote');">
                            </div>
                            <div id="phonenumberfieldnote" class="fielddescription">
                                <p>"Enter phone number (eg: 4034025684)"</p>
                            </div>
                        </div>
                        <div class="formvalidationmessage">
                            <p>"Phone Number is required!"</p>
                        </div>

                        <!--Position of the Agent-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="position-label" for="position">* Position: </label>
                            </div>
                            <div class="forminput">
                                <select name="position" id="position" class="input-field" onfocus="displayNote('position','positionfieldnote')" onblur="hideNote('position','positionfieldnote')">
                                    <option value></option>
                                    <option value="Junior Agent">Junior Agent</option>
                                    <option value="Intermediate Agent">Intermediate Agent</option>
                                    <option value="Senior Agent">Senior Agent</option>
                                </select>
                            </div>
                            <div id="positionfieldnote" class="fielddescription">
                                <p>"Select the position level of the agent"</p>
                            </div>
                        </div>
                        <div class="formvalidationmessage">
                            <p>"Position of the agent must be specified!"</p>
                        </div>

                        <!--Agency ID-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="agencyid-label" for="agencyid">* Agency : </label>
                            </div>
                            <div class="forminput">
                                <select class="input-field" name="agencyid" id="agencyid" onfocus="displayNote('agencyid','agencyidfieldnote')" onblur="hideNote('agencyid','agencyidfieldnote')">
                                    <option value></option>
                                    <option value="1">Calgary</option>
                                    <option value="2">Okotoks</option>
                                </select>
                            </div>
                            <div id="agencyidfieldnote" class="fielddescription">
                                <p>"Enter Agency location"</p>
                            </div>
                        </div>
                        <div class="formvalidationmessage">
                            <p>"Agency location must be specified!"</p>
                        </div>

                        <!--User Name-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="username-label" for="username">* Username: </label>
                            </div>
                            <div class="forminput">
                                <input type="text" name="username" id="username" class="input-field" onfocus="displayNote('username','usernamefieldnote')" onblur="hideNote('username','usernamefieldnote');">
                            </div>
                            <div id="usernamefieldnote" class="fielddescription">
                                <p>" 6 to 10 alphanumeric characters. Allowed special characters within the password phrase: '_' and '.'  "</p>
                            </div>
                        </div>
                        

                        <!--Password-->
                        <div class="formrow">
                            <div class="labels">
                                <label id="password-label" for="password">* Password: </label>
                            </div>
                            <div class="forminput">
                                <input type="password" name="password" id="password" class="input-field" onfocus="displayNote('password','passwordfieldnote')" onblur="hideNote('password','passwordfieldnote');">
                            </div>
                            <div id="passwordfieldnote" class="fielddescription">
                                <p>"Please enter a password for the user account"</p>
                            </div>
                        </div>
                        <div class="formvalidationmessage">
                            <p>"Please provide a password"</p>
                        </div>


                        <!--Submit and Reset buttons-->
                        <div id="buttons">
                            <button name="submit" id="submit" type="submit">Submit</button>
                            <button onclick="return confirmReset()" name="reset" id="reset" type="reset">Reset</button>
                            <!--<span id="success_message">Success!</span>-->
                        </div>
                        
                    </form>
            </div>
        </div>
        
        <!--Logout link-->
        <span class="border border-primary" id="logout"><a href="logout.php">Logout</a></span>
        
        <!--Copyright message-->
        <?PHP include("footer.php"); ?>

        <!-- Script to validat ethe form -->
        <script type="text/javascript" src="../scripts/agentRegistrationScript.js"></script>
    </body>
</html>
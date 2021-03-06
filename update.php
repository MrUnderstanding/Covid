<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>COVID Info</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='update.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='https://pro.fontawesome.com/releases/v5.12.0/css/all.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='https://cdn.jsdelivr.net/npm/hack-font@3/build/web/hack.css'>
    <script src="jquery.js"></script>
    <script src="jquery.are-you-sure.js"></script>

    <!-- HTML and Javascript code written by Dan Bartels -->

</head>

<nav>
    <ul>
        <li><a href="main.php">Home Page</a></li>
        <li><a href="retrieve.php">Retrieve Data</a></li>
        <li><a href="index.html">Log Out</a></li>
    </ul>
</nav>

<body>
    <!-- Container for vaccination form 1-->
    <div id="vaccForm">
        <form id="vaccInfo">
            <div class="labelbox">
                <label for="fName">First Name</label>
                <input type="text" id="fName" name="fName" value="<?php echo $_SESSION['fName']; ?>" placeholder="Required">
                <div id="fNameError"></div>
            </div>
            <div class="labelbox">
                <label for="mName">Middle Name</label>
                <input type="text" id="mName" name="mName" value="<?php echo $_SESSION['mName']; ?>" placeholder="Required">
                <div id="mNameError"></div>
            </div>
            <div class="labelbox">
                <label for="lName">Last Name</label>
                <input type="text" id="lName" name="lName" value="<?php echo $_SESSION['lName']; ?>" placeholder="Required">
                <div id="lNameError"></div>
            </div>
            <hr>
            <div class="labelbox2">
                <label for="dob">Date of Birth</label>
                <div id="dobChange">
                <input type="date" readonly value="<?php echo $_SESSION['dob']; ?>" id="dob" name="dob">
                <div id="dobError"></div>
                </div>
            </div>
            <!-- REMOVE THIS FIELD, IT IS REDUNDANT -->
            <!--
            <div class="labelbox">
                <label for="patientNumber">Patient Number</label>
                <input type="text" id="patientNumber" name="patientNumber">
            </div>
        -->
            <!-- A drop down that offers multiple choices -->
            <div class="labelbox2">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" class="required">
    	            <option value="<?php echo $_SESSION['gender']; ?>"> <?php echo $_SESSION['gender']; ?> </option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <div id="genderError"></div>
            </div>
            <hr>
            <div class="labelboxTest">
                <!-- Race and Ethnicity includes boxes that you click to fill in -->
                <p>Race</p>
                <hr>
                <div id="race">
                    <ul id="race">
                        <li><input type="radio" id="race1" name="race" value="nativeAmerican"<?php if ($_SESSION['race'] == "nativeAmerican") { echo "checked='checked'";} ?>>Native American</li>
                        <li><input type="radio" id="race2" name="race" value="white"<?php if ($_SESSION['race'] == "white") { echo "checked='checked'";} ?>>White</li>
                        <li><input type="radio" id="race3" name="race" value="asian"<?php if ($_SESSION['race'] == "asian") { echo "checked='checked'";} ?>>Asian</li>
                        <li><input type="radio" id="race4" name="race" value="black"<?php if ($_SESSION['race'] == "black") { echo "checked='checked'";} ?>>Black</li>
                        <li><input type="radio" id="race5" name="race" value="other"<?php if ($_SESSION['race'] == "other") { echo "checked='checked'";} ?>>Other</li>
                    </ul>
                </div>
            </div>
            <div class="labelboxTest">
                <p>Ethnicity</p>
                <hr>
                <div id="ethnicity">
                    <ul>
                        <li><input type="radio" id="ethnicity1" name="ethnicity" value="HispanicLatino"<?php if ($_SESSION['ethnicity'] == "HispanicLatino") { echo "checked='checked'";} ?>>Hispanic or Latino</li>
                        <li><input type="radio" id="ethnicity2" name="ethnicity" value="Other" <?php if ($_SESSION['ethnicity'] == "Other") { echo "checked='checked'";} ?>>Other</li>             
                    </ul>
                </div>
            </div>  
            <hr>
            <div class="labelbox">
                <label for="street">Street Name</label>
                <input type="text" id="street" name="street" value="<?php echo $_SESSION['street']; ?>" placeholder="Required">
                <div id="streetError"></div>
            </div>
             <div class="labelbox">
                <label for="state">State</label>
                <!-- Another drop down menu to choose your state -->
                <select id="state" name="state" class="required">
                    <option value="<?php echo $_SESSION['state']; ?>"> <?php echo $_SESSION['state']; ?> </option>
                    <option value="Alabama">AL</option>
                    <option value="Alaska">AK</option>
                    <option value="Arizona">AZ</option>
                    <option value="Arkansas">AR</option>
                    <option value="California">CA</option>
                    <option value="Colorado">CO</option>
                    <option value="Connecticut">CT</option>
                    <option value="Delaware">DE</option>
                    <option value="Florida">FL</option>
                    <option value="Georgia">GA</option>
                    <option value="Hawaii">HI</option>
                    <option value="Idaho">ID</option>
                    <option value="Illinois">IL</option>
                    <option value="Indiana">IN</option>
                    <option value="Iowa">IA</option>
                    <option value="Kansas">KS</option>
                    <option value="Kentucky">KY</option>
                    <option value="Louisiana">LA</option>
                    <option value="Maine">ME</option>
                    <option value="Maryland">MD</option>
                    <option value="Massachusetts">MA</option>
                    <option value="Michigan">MI </option>
                    <option value="Minnesota">MN</option>
                    <option value="Mississippi">MS</option>
                    <option value="Missouri">MO</option>
                    <option value="Montana">MT</option>
                    <option value="Nebraska">NE</option>
                    <option value="Nevada">NV</option>
                    <option value="New Hampshire">NH</option>
                    <option value="New Jersey">NJ</option>
                    <option value="New Mexico">NM</option>
                    <option value="New York">NY</option>
                    <option value="North Carolina">NC</option>
                    <option value="North Dakota">ND</option>
                    <option value="Ohio">OH</option>
                    <option value="Oklahoma">OK</option>
                    <option value="Oregon">OR</option>
                    <option value="Pennsylvania">PA</option>
                    <option value="Rhode Island">RI</option>
                    <option value="South Carolina">SC</option>
                    <option value="South Dakota">SD</option>
                    <option value="Tennessee">TN</option>
                    <option value="Texas">TX</option>
                    <option value="Utah">UT</option>
                    <option value="Vermont">VT</option>
                    <option value="Virginia">VA</option>
                    <option value="Washington">WA</option>
                    <option value="West Virginia">MWV</option>
                    <option value="Wisconsin">WI</option>
                    <option value="Wyoming">WY</option>
                </select>
                <div id="stateError"></div>
            </div>
            <div class="labelbox">
                <label for="zip">Zipcode</label>
                <input type="text" id="zip" name="zip" required="required" pattern="[0-9]{5}" maxlength="5" placeholder="Required" value="<?php echo $_SESSION['zip']; ?>">
                <div id="zipError"></div>
            </div><br>
        </form>
    </div>

<!-- Container for vaccination form 2 -->
    <div id="vaccForm2">
        <form id="vaccInfo">
            
            <div class="labelbox">
                <label for="vaccine" style="font-size: 22px;">Vaccine Manufacturer</label>
                <!-- Drop down to choose a vaccine -->
                <select id="vaccine" name="vaccine" class="required">
                    <option value="<?php echo $_SESSION['vaccine']; ?>"><?php echo $_SESSION['vaccine']; ?></option>
                    <option value="moderna">Moderna</option>
                    <option value="pfizer">Pfizer</option>
                    <option value="johnson&johnson">Johnson and Johnson</option>
                </select>
                <div id="vaccineError"></div>
            </div>
            <div class="labelbox">
                <label for="lot">Lot Number</label>
                <input type="text" id="lot" name="lot"placeholder="Required" value="<?php echo $_SESSION['lot']; ?>">
                <div id="lotError"></div>
            </div>
            <div class="labelbox">
                <label for="doseNumber">Dose Number</label>
                <!--<input type="text" id="doseNumber" name="doseNumber"placeholder="Required">-->
                <input type="text" readonly id="doseNumber" name="doseNumber" value="<?php echo $_SESSION['doseNumber'] + 1; ?>" >
                <div id="doseError"></div>
            </div>
            <hr>
            <div class="labelbox">
                <label for="pih" style="font-size: 19px;">Primary Insurance Holder</label>
                <input type="text" id="pih" name="pih" placeholder="Required" value="<?php echo $_SESSION['pih']; ?>">
                <div id="pihError"></div>
            </div>
            <div class="labelbox">
                <label for="insurer">Insurer</label>
                <input type="text" id="insurer" name="insurer"placeholder="Required" value="<?php echo $_SESSION['insurer']; ?>">
                <div id="insurerError"></div>
            </div>
            <div class="labelbox">
                <label for="pid">ID Number</label>
                <input type="text" id="pid" name="pid"placeholder="Required" value="<?php echo $_SESSION['pid']; ?>">
                <div id="pidError"></div>
            </div>
            <hr>
            <div class="labelbox">
                <label for="vDate1" style="font-size: 22px">Vaccination Date</label>
                <input type="date" id="vDate1" name="vDate1">
                <div id="vDate1Error"></div>
            </div>

            <div class="labelbox">
                <label for="arm">Injected Arm</label>
                <!-- Drop down to choose the arm the vaccine was delivered to -->
                <select id="arm" name="arm" class="required">
                    <option selected value> -- Required -- </option>
                    <option value="left">Left</option>
                    <option value="right">Right</option>
                </select>
                <div id="armError"></div>
            </div>
            <hr>
            <div class="labelbox3">
                <label for="denied">Reasons for refusing the shot?</label>
                <textarea id="notes" name="denied"  data-ays-ignore="true">
                </textarea>
            </div>
            <hr>
            <div class="labelbox3">
                <label for="notes"><a href="https://vaers.hhs.gov/esub/index.jsp" target="_blank">Any unusual side effects?</a></label>
                <textarea id="notes" name="notes" data-ays-ignore="true">
                </textarea>
            </div>
            <br>
            <button type="button" id="submit" onclick="return confirm()">Submit</button>   
        </form>
    </div>
    <script>
 
        function confirm() {

            // Pattern use to check for symbols in match function
            var format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;

            // Pattern used to check format of street address
            var format2 = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,<>\/?~]/;


            // Pattern use to test for numbers in match function
            var numbers = /[0-9]+/;

            var now = new Date();

            // Variables to assign if a parameter is correct or not
            var fNameCorrect = false;
            var lNameCorrect = false;
            var mNameCorrect = false;
            var dobCorrect = false;
            var genderCorrect = false;
            var ethnicityCorrect = false;
            var patientNumberCorrect = false;
            var vaccineCorrect = false;
            var zipCorrect = document.getElementById("zip").checkValidity();
            var streetCorrect = false;
            var armCorrect = false;
            var lotCorrect = false;
            var pihCorrect = false;
            var insurerCorrect = false;
            var doseCorrect = false;
            var pidCorrect = false;
            var vDate1 = false;
            /*var vDate2 = false;*/

            /* Validate first name by checking if it is empty, contains any numbers, or contains any symbols */
            if ((document.getElementById("fName").value == "")) {
                fNameCorrect = false;
                document.getElementById("fNameError").style.visibility="visible";
                document.getElementById('fNameError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Must be filled out</b>';
                document.getElementById("fName").style.backgroundColor="#FFCCCC";

            }   else if (document.getElementById("fName").value.match(numbers)) {
                fNameCorrect = false;

                document.getElementById("fNameError").style.visibility="visible";
                document.getElementById('fNameError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Cannot contain numbers</b>';
                document.getElementById("fName").style.backgroundColor="#FFCCCC";

            }   else if (document.getElementById("fName").value.match(format)) {
                fNameCorrect = false;
                document.getElementById("fNameError").style.visibility="visible";
                document.getElementById('fNameError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Invalid symbols Included</b>'
                document.getElementById("fName").style.backgroundColor="#FFCCCC";

            }  else {
                document.getElementById("fNameError").style.visibility="hidden";
                document.getElementById('fNameError').innerHTML = '';
                document.getElementById("fName").style.backgroundColor = "";
                fNameCorrect = true;

            }

            /* Validate middle name by checking if it is empty, contains any numbers, or contains any symbols */
            if ((document.getElementById("mName").value == "")) {
                document.getElementById("mNameError").style.visibility="visible";
                document.getElementById('mNameError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Must be filled out</b>';
                document.getElementById("mName").style.backgroundColor="#FFCCCC";

            }   else if (document.getElementById("mName").value.match(numbers)) {
                mNameCorrect = false;
                document.getElementById("mNameError").style.visibility="visible";
                document.getElementById('mNameError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Cannot contain numbers</b>';
                document.getElementById("mName").style.backgroundColor="#FFCCCC";

            }   else if (document.getElementById("mName").value.match(format)) {
                mNameCorrect = false;
                document.getElementById("mNameError").style.visibility="visible";
                document.getElementById('mNameError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Invalid symbols included</b>';
                document.getElementById("mName").style.backgroundColor="#FFCCCC";

            }   else {
                document.getElementById("mNameError").style.visibility="hidden";
                document.getElementById('mNameError').innerHTML = '';
                document.getElementById("mName").style.backgroundColor = "";
                mNameCorrect = true;

            }
            
            /* Validate last name by checking if it is empty, contains any numbers, or contains any symbols */
            if ((document.getElementById("lName").value=="")) {
                lNameCorrect = false;
                document.getElementById("lNameError").style.visibility="visible";
                document.getElementById('lNameError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Must be filled out</b>';
                document.getElementById("lName").style.backgroundColor="#FFCCCC";

            } else if (document.getElementById("lName").value.match(numbers)) {
                lNameCorrect = false;
                document.getElementById("lNameError").style.visibility="visible";
                document.getElementById('lNameError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Cannot contain numbers</b>';
                document.getElementById("lName").style.backgroundColor="#FFCCCC";

            } else if (document.getElementById("lName").value.match(format)) {
                lNameCorrect = false;
                document.getElementById("lNameError").style.visibility="visible";
                document.getElementById('lNameError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Invalid symbols included</b>';
                document.getElementById("lName").style.backgroundColor="#FFCCCC";

            }   else {
                document.getElementById("lNameError").style.visibility="hidden";
                document.getElementById('lNameError').innerHTML = '';
                document.getElementById("lName").style.backgroundColor="";
                lNameCorrect = true;
            }

            /* Validate Date of Birth */ /*
            if (document.getElementById("dob").value=="") {
                dobCorrect = false;
                document.getElementById("dobError").style.visibility="visible";
                document.getElementById('dobError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Select a Date</b>';
                document.getElementById("dob").style.backgroundColor="#FFCCCC";
            }  else if ((document.getElementById("dob").value) > (now))  {
                document.getElementById("dobError").style.visibility="visible";
                document.getElementById('dobError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Future date</b>';
                document.getElementById("dob").style.backgroundColor="#FFCCCC";
            } else {
                document.getElementById("dob").style.backgroundColor="";
                document.getElementById("dobError").style.visibility="hidden";
                document.getElementById('dobError').innerHTML = '';
                dobCorrect = true;
            } */


            /* Validate gender */
            if (document.getElementById("gender").value!="") {
                document.getElementById("gender").style.backgroundColor="";
                document.getElementById("genderError").style.visibility="hidden";
                document.getElementById('genderError').innerHTML = '';
                genderCorrect = true;
            } else {
                genderCorrect = false;
                document.getElementById("genderError").style.visibility="visible";
                document.getElementById('genderError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Select a Gender</b>';
                document.getElementById("gender").style.backgroundColor="#FFCCCC";
                document.getElementById("gender").value=="Select an option";
            }

            /* Validate street address by checking if it is empty or if it contains symbols */
            if ((document.getElementById("street").value=="")) {
                streetCorrect = false;
                document.getElementById("streetError").style.visibility="visible";
                document.getElementById('streetError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Must be filled out</b>';
                document.getElementById("street").style.backgroundColor="#FFCCCC";
            
            } 
            /*
            else if (document.getElementById("street").value.match(format2)) {
                streetCorrect = false;
                document.getElementById("streetError").style.visibility="visible";
                document.getElementById('streetError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Invalid symbols included</b>';
                document.getElementById("street").style.background="#FFCCCC";
                
            } 
            */
            else {
                document.getElementById("streetError").style.visibility="hidden";
                document.getElementById('streetError').innerHTML = '';
                document.getElementById("street").style.backgroundColor="";
                streetCorrect = true;
            }

            /* Validate state */
            if (!(document.getElementById("state").value== "")) {
                document.getElementById("state").style.backgroundColor="";
                document.getElementById("stateError").style.visibility="hidden";
                document.getElementById('stateError').innerHTML = '';
                stateCorrect = true;
            } else {
                stateCorrect = false;
                document.getElementById("stateError").style.visibility="visible";
                document.getElementById('stateError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Select a State</b>';
                document.getElementById("state").style.backgroundColor="#FFCCCC";
            }

            
            /* Validate zipcode by checking if it contains any letters or if it is over 5 digits*/       
            if ((document.getElementById("zip").value=="") || (!document.getElementById("zip").value.match(numbers))) {
                var zipCorrect = false;
                document.getElementById("zipError").style.visibility="visible";
                document.getElementById('zipError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Must be filled out</b>';
                document.getElementById("zip").style.backgroundColor="#FFCCCC";

            }   else if (!(document.getElementById("zip").value.length == 5)) {
                var zipCorrect = false;
                document.getElementById("zipError").style.visibility="visible";
                document.getElementById('zipError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Must be 5 digits long</b>';
                document.getElementById("zip").style.backgroundColor="#FFCCCC";

            } else {
                document.getElementById("zip").style.backgroundColor="";
                document.getElementById("zipError").style.visibility="hidden";
                document.getElementById('zipError').innerHTML = '';
                zipCorrect = true;
            }
            

            /* Validate type of vaccine by checking if an option is selected */
            if (document.getElementById("vaccine").value=="moderna" || document.getElementById("vaccine").value=="pfizer" || document.getElementById("vaccine").value=="johnson&johnson" ) {
                document.getElementById("vaccine").style.backgroundColor="";
                document.getElementById("vaccineError").style.visibility="hidden";
                document.getElementById('vaccineError').innerHTML = '';
                vaccineCorrect = true;
            } else {
                vaccineCorrect = false;
                document.getElementById("vaccineError").style.visibility="visible";
                document.getElementById('vaccineError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Choose a vaccine</b>';
                document.getElementById("vaccine").style.backgroundColor="#FFCCCC";
                document.getElementById("vaccine").value=="Select an option";
            }

            /* Validate lot number by checking if it is empty or contains any symbols  */
            if ((document.getElementById("lot").value=="")) {
                lotCorrect = false;
                document.getElementById("lotError").style.visibility="visible";
                document.getElementById('lotError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Must be filled out</b>';
                document.getElementById("lot").style.backgroundColor="#FFCCCC";
                
            }  /* else if (document.getElementById("lot").value.match(format2)) {
                lotCorrect = false;
                document.getElementById("lotError").style.visibility="visible";
                document.getElementById('lotError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>invalid symbols included</b>';
                document.getElementById("lot").style.backgroundColor="#FFCCCC";
                
            } */else {
                document.getElementById("lot").style.backgroundColor="";
                document.getElementById("lotError").style.visibility="hidden";
                document.getElementById('lotError').innerHTML = '';
                lotCorrect = true;
            }

            /* Validate dose number by checking if it contains any letters or symbols */ /*
            if ((document.getElementById("doseNumber").value=="") || (!document.getElementById("doseNumber").value.match(numbers))) {
                var doseCorrect = false;
                document.getElementById("doseError").style.visibility="visible";
                document.getElementById('doseError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Must be numbers</b>';
                document.getElementById("doseNumber").style.backgroundColor="#FFCCCC";

            } else {
                document.getElementById("doseNumber").style.backgroundColor="";
                document.getElementById("doseError").style.visibility="hidden";
                document.getElementById('doseError').innerHTML = '';
                doseCorrect = true;
            } */

            if (document.getElementById("doseNumber").value=="1" || document.getElementById("doseNumber").value=="2") {
                document.getElementById("doseNumber").style.backgroundColor="";
                document.getElementById("doseError").style.visibility="hidden";
                document.getElementById('doseError').innerHTML = '';
                doseCorrect = true;
            } else {
                doseCorrect = false;
                document.getElementById("doseError").style.visibility="visible";
                document.getElementById('doseError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Select a dose number</b>';
                document.getElementById("doseNumber").style.backgroundColor="#FFCCCC";
                document.getElementById("doseNumber").value=="Select an option";
            }

            /* Validate primary insurance holder by checking if it is empty, contains any numbers, or contains any symbols */
            if ((document.getElementById("pih").value=="")) {
                pihCorrect = false;
                document.getElementById("pihError").style.visibility="visible";
                document.getElementById('pihError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Must be filled out</b>';
                document.getElementById("pih").style.backgroundColor="#FFCCCC";

            } else if (document.getElementById("pih").value.match(numbers)) {
                pihCorrect = false;
                document.getElementById("pihError").style.visibility="visible";
                document.getElementById('pihError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Cannot contain numbers</b>';
                document.getElementById("pih").style.backgroundColor="#FFCCCC";

            } else if (document.getElementById("pih").value.match(format)) {
                pihCorrect = false;
                document.getElementById("pihError").style.visibility="visible";
                document.getElementById('pihError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Invalid symbols included</b>';
                document.getElementById("pih").style.backgroundColor="#FFCCCC";

            }   else {
                document.getElementById("pih").style.backgroundColor="";
                document.getElementById("pihError").style.visibility="hidden";
                document.getElementById('pihError').innerHTML = '';
                pihCorrect = true;
            }

            /* Validate insurer by checking if it is empty, contains any numbers, or contains any symbols  */
            if ((document.getElementById("insurer").value=="")) {
                insurerCorrect = false;
                document.getElementById("insurerError").style.visibility="visible";
                document.getElementById('insurerError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Must be filled out</b>';
                document.getElementById("insurer").style.backgroundColor="#FFCCCC";

            } else if (document.getElementById("insurer").value.match(numbers)) {
                insurerCorrect = false;
                document.getElementById("insurerError").style.visibility="visible";
                document.getElementById('insurerError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Cannot contain numbers</b>';
                document.getElementById("insurer").style.backgroundColor="#FFCCCC";

            } else if (document.getElementById("insurer").value.match(format)) {
                insurerCorrect = false;
                document.getElementById("insurerError").style.visibility="visible";
                document.getElementById('insurerError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Invalid symbols included</b>';
                document.getElementById("insurer").style.backgroundColor="#FFCCCC";

            }   else {
                document.getElementById("insurer").style.backgroundColor="";
                document.getElementById("insurerError").style.visibility="hidden";
                document.getElementById('insurerError').innerHTML = '';
                insurerCorrect = true;
            }

            /* Validate pid by checking if it is empty, contains any numbers, or contains any symbols  */
            
            if ((document.getElementById("pid").value=="")) {
                pidCorrect = false;
                document.getElementById("pidError").style.visibility="visible";
                document.getElementById('pidError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Must be filled out</b>';
                document.getElementById("pid").style.backgroundColor="#FFCCCC";
                
            } else if (document.getElementById("pid").value.match(format2)) {
                pidCorrect = false;
                document.getElementById("pidError").style.visibility="visible";
                document.getElementById('pidError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Invalid symbols included</b>';
                document.getElementById("pid").style.backgroundColor="#FFCCCC";
                
            } else {
                document.getElementById("pid").style.backgroundColor="";
                document.getElementById("pidError").style.visibility="hidden";
                document.getElementById('pidError').innerHTML = '';
                pidCorrect = true;
            }
            

            /* Validate first shot date by checking if it was filled out */
            if (document.getElementById("vDate1").value=="") {
                vDate1Correct = false;
                document.getElementById("vDate1").style.backgroundColor="#FFCCCC";
                document.getElementById("vDate1Error").style.visibility="visible";
                document.getElementById('vDate1Error').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Select a date</b>';
            }  else {
                document.getElementById("vDate1").style.backgroundColor="";
                document.getElementById("vDate1Error").style.visibility="hidden";
                document.getElementById('vDate1Error').innerHTML = '';
                vDate1Correct = true;
            }

            /* Validate second shot date by checkign if it was filled out */
            /*
            if (document.getElementById("vDate2").value=="") {
                vDate2Correct = false;
                document.getElementById("vDate2").style.backgroundColor="#FFCCCC";
                document.getElementById("vDate2Error").style.visibility="visible";
                document.getElementById('vDate2Error').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Select a date</b>';
            }  else {
                document.getElementById("vDate2").style.backgroundColor="";
                document.getElementById("vDate2Error").style.visibility="hidden";
                document.getElementById('vDate2Error').innerHTML = '';
                vDate2Correct = true;
            }
            */
            /* Validate arm used for shot by ch ecking an option was chosen */
            if (document.getElementById("arm").value=="left" || document.getElementById("arm").value=="right") {
                document.getElementById("arm").style.backgroundColor="";
                document.getElementById("armError").style.visibility="hidden";
                document.getElementById('armError').innerHTML = '';
                armCorrect = true;
            } else {
                armCorrect = false;
                document.getElementById("armError").style.visibility="visible";
                document.getElementById('armError').innerHTML = '<i class="fa fa-warning" style="font-size:16px"></i> <b>Select an arm</b>';
                document.getElementById("arm").style.backgroundColor="#FFCCCC";
                document.getElementById("arm").value=="Select an option";
            }


            
            if (fNameCorrect && mNameCorrect && lNameCorrect /*&& dobCorrect*/ && genderCorrect && streetCorrect && stateCorrect && vaccineCorrect && zipCorrect && lotCorrect && doseCorrect && pihCorrect && pidCorrect && insurerCorrect && vDate1Correct /*&& vDate2Correct*/ && armCorrect) {
                $('form').trigger('reinitialize.areYouSure')
            
                /* do this for all the field entries that we need to put into the system */

            
                $.post("insert.php", $('form').serialize(), function (data) {
                        window.location.href="test.html";
                    });
            
            return false;
                
            } 

        }
    
        $(function() {
            // Enable on all forms
            $('form').areYouSure();           
        })

    </script>
</body>
</html>
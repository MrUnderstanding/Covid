<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Retrieve</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='retrieve.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='https://pro.fontawesome.com/releases/v5.12.0/css/all.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='https://cdn.jsdelivr.net/npm/hack-font@3/build/web/hack.css'>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
	<script src="jquery.js"></script>
</head>
<body>

    <nav>
        <ul>
            <li><a href="input.html">Input Data</a></li>
            <li><a href="main.php">Main Page</a></li>
            <li><a href="index.html">Log Out</a></li>
        </ul>
    </nav>

    <div id="patientInfo">
        <form id="patientInfoForm">
            <p>Please submit the patient's first and last name</p>
            <label for="fName">First Name:</label>
            <input type="text" id="fName" name="fName" required><br>
            <label for="lName">Last Name:</label>
            <input type="text" id="lName" name="lName" required><br>
            <label for="doseNumber">Dose Number:</label>
                <select id="doseNumber" name="doseNumber" class="required">
                    <option value="1">1</option>
                    <option value="2">2</option>
					 <option value="2">3</option>
                </select><br>
				
            <button type="button" id="submit" class="submit" onclick="return confirm()">Submit</button>   
        </form>
    </div>

    <script>

        // function confirm() {         
            // if (document.getElementById("fName").value=="" || document.getElementById("lName").value=="") {
                // document.getElementById("fName").style.backgroundColor="#FFCCCC";
                // document.getElementById("lName").style.backgroundColor="#FFCCCC";
                // alert("Invalid first and last name.");
            // } else {
                // document.getElementById("fName").style.backgroundColor="";
                // document.getElementById("lName").style.backgroundColor="";        

                // $.post("grab.php", $('form').serialize(), function (data) {
                    // window.location = "retrieveResults.php"
                    // });
                
            // }
            // return false;
        
            
        // }
		
		function confirm() {



            $.post("grab.php", $('form').serialize(), function (data) {              

                console.log(data);

                if (data == '1') {

                    document.getElementById("fName").style.backgroundColor="";

                    document.getElementById("lName").style.backgroundColor="";

                    window.location = 'retrieveResults.php';

                } else {

                    document.getElementById("fName").style.backgroundColor="#FFCCCC";

                    document.getElementById("lName").style.backgroundColor="#FFCCCC";

                    alert('Invalid credentials!!!!!!!!!!');

                }

            });

           

            return false;

        }
    </script>
</body>
</html>
<?php require_once("includes/db_connect.php");
   include_once("templates/header.php");
   include_once("templates/nav.php");

$responseId=mysqli_real_escape_string($conn,$_GET["responseId"]);

$spot_response= "SELECT * FROM responses WHERE responseId= '$responseId'LIMIT 1" ;


//there is no loop because only one time is picked
$spot_resp_result = $conn->query($spot_response);
$spot_resp_row = $spot_resp_result->fetch_assoc();



?>

  <?php
   if(isset($_POST["Update_Details"])){
    //mysqli_real_escape_string($conn,addcslashes-Used for cleaning up data before entering in database-It ensures there is no sql injections-security measure 
       $firstName=mysqli_real_escape_string($conn,addslashes($_POST["firstname"]));
       $lastName=mysqli_real_escape_string($conn,addslashes($_POST["lastname"]));
       $Email_Address=mysqli_real_escape_string($conn,addslashes($_POST["emailAddress"]));
       $PhoneNumber=mysqli_real_escape_string($conn,addslashes($_POST["phoneNumber"]));
       $Date_of_Birth=mysqli_real_escape_string($conn,addslashes($_POST["date_of_birth"]));
       $Gender=mysqli_real_escape_string($conn,addslashes($_POST["Gender"]));
       $course=mysqli_real_escape_string($conn,addslashes($_POST["course"]));
       $Intake=mysqli_real_escape_string($conn,addslashes($_POST["Intake"]));
       $Review=mysqli_real_escape_string($conn,addslashes($_POST["Review"]));
       $responseId=mysqli_real_escape_string($conn,addslashes($_POST["responseId"]));

        // Available in Line 1  //$servername = "localhost";
        //$username = "username";
        //$password = "password";
        //$dbname = "myDB";

        // Create connection
        //$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        //if ($conn->connect_error) {
        //die("Connection failed: " . $conn->connect_error);
        //}  

        
          
          $update_response = "UPDATE responses SET sender_firstname='$firstName', sender_lastname='$lastName', sender_email='$Email_Address',sender_phoneNumber='$PhoneNumber',sender_DOB='$Date_of_Birth',sender_Gender'$Gender',sender_Course='$course',sender_Intake='$Intake',sender_Review='$Review' WHERE responseId= '$responseId' LIMIT 1";
          
        

     if ($conn->query($update_response) === TRUE) {
    header("Location:view_responses.php");
    exit();
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
   $conn->close();
   ?>

    <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
.header-h1{
    font-size:medium;
    color:lightseagreen;
    text-decoration: underline;
}

p{
    font-size: large;
    color:navy;
}

body{
    background-image: url(Images/Background/bb2.jpg);

}

p1{
    color: azure;
}
p2{
    color: black;
    font-size: medium;
}

    </style>


<body >

    <div class= "header-h1">
    <h1 >Update Response</h1>
</div>
        <div class="box-sizing">
         <div id="registrationForm">   

</div>
<!---Fill the follow below to register-->
    
        <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="POST"class="contact_form">
            
<!--Personal Details-->
<label for="FN"> FirstName:</label><br>
<input type="text" name="firstname"id="FN"placeholder="FirstName" required value="<?php print $spot_resp_row["sender_firstname"];?>"><br><br>

<label for="lN"> lastName:</label><br>
<input type="text" name="lastname"id="lN"placeholder="lastName" required value="<?php print $spot_resp_row["sender_lastname"];?>" ><br><br>

<label for="Email_Address">Email_Address:</label><br>
<input type="email"id="Email_Address"name="emailAddress"placeholder="Email-Address"required value="<?php print $spot_resp_row["sender_email"];?>" ><br><br>

<label for="PhoneNumber">PhoneNumber:</label><br>
<input type="text"name="phoneNumber"id="PhoneNumber"placeholder="PhoneNumber"required value="<?php print $spot_resp_row["sender_phonenumber"];?>"><br><br>

<label for="Date of Birth">Date_of_Birth:</label><br>
<input type="date"name= "date_of_birth"placeholder="range"required value="<?php print $spot_resp_row["sender_DOB"];?>" ><br><br>

<!--End of personal Details-->

<label for="Gender"required></label><br>
<select name="Gender"value="">

<option value ="<?php print $spot_resp_row["sender_Gender"];?>"><?php print $spot_resp_row["sender_Gender"];?></option>
<option value="Female" >Female</option>
<option value="Male">Male</option>
<option value="Rather not say">Rather not say</option>
</select>


<select name="course"id="course"required  ><br>
<!--Select a course-->
<option value="<?php print $spot_resp_row["sender_Course"];?>"><?php print $spot_resp_row["sender_Course"];?></option>
<option value="Software Engineering">Software Engineering</option>
<option value="Mobile App Development">Mobile App Development</option>
<option value="CyberSecurity">CyberSecurity</option>
<option value="DataScience">DataScience</option>
<option value="Statistical Analysis">Statistical Analysis</option>
<option value="Graphic Design">Graphic Design</option>
<option value="Web Design">Web Design</option>
<option value="Python Programming">Python Programming</option>
<option value="C# Programming">C# Programming</option>
<option value="Certified Ethical Hacking">Certified Ethical Hacking</option>
<option value="Computer Network Defender">Computer Network Defender</option>
<option value="Computer Hacking Forensics Investigator">Computer Network Defender</option>

  
</select>

<br><br>
<!--Select intake-->
<label for="IntakeJanuary"required value="">Intake:</label><br>
<input type="radio"id="IntakeJanuary"name="Intake"value="January"<?php if($spot_resp_row["sender_Intake"] == 'January'){print 'checked';}?>>
<label for="IntakeJanuary">January</label>


<input type="radio"id="IntakeApril"name="Intake"value="April"<?php if($spot_resp_row["sender_Intake"] == 'April'){print 'checked';}?>>
<label for="IntakeApril">April</label>

<input type="radio"id="IntakeJuly"name="Intake"value="July"<?php if($spot_resp_row["sender_Intake"] == 'July'){print 'checked';}?>>
<label for="IntakeJuly">July</label>
    
 <input type="radio" id="IntakeOctober" name="Intake"value="October"<?php if($spot_resp_row["sender_Intake"] == 'October'){print 'checked';}?>>
 <label for="IntakeOctober">October</label>

<br><br>
<!--How did you know about us?-->
<label for="How did you hear about us?">How did you hear about us?</label><br>

<select name="Review"id="Review"required><br>
    <option value ="value=<?php print $spot_resp_row["sender_Review"];?> "><?php print $spot_resp_row["sender_Review"];?></option>
    <option value="Website">Website</option>
    <option value="Friends">Friends/Family</option>
    <option value="SocialMedia">Social Media</option>
    </select>
    
    <br><br>
<!--Input for saving details-->
    <input type="submit"name="Update_Details" value="Update Details">
    <input type="hidden" name="responseId" value= <?php print $spot_resp_row["responseId"];?>>

</div>

<!--Confirmation Details-->
    <div id="ConfirmationMessage"style="display:none;color:green;">Details saved successfully!</div>

</form>


<?php include_once("templates/footer.php");?>
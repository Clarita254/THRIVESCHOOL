<?php require_once("includes/db_connect.php");
   include_once("templates/header.php");
   include_once("templates/nav.php");

$responseId=mysqli_real_escape_string($conn,$_GET["responseId"]);

$spot_response= "SELECT * FROM `responses` WHERE responseId= '$responseId'LIMIT 1" ;


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

<option value ="">---Select Gender-</option>
<option value="Female"<?php print $spot_resp_row["sender_Gender"];?> >Female</option>
<option value="Male"<?php print $spot_resp_row["sender_Gender"];?>>Male</option>
<option value="Rather not say"<?php print $spot_resp_row["sender_Gender"];?>>Rather not say</option>
</select>


<select name="course"id="course"required  ><br>
<!--Select a course-->
<option value="">------Select a Course</option>
<option value="Software Engineering"<?php print $spot_resp_row["sender_Course"];?>>Software Engineering</option>
<option value="Mobile App Development"<?php print $spot_resp_row["sender_Course"];?>>Mobile App Development</option>
<option value="CyberSecurity"<?php print $spot_resp_row["sender_Course"];?>>CyberSecurity</option>
<option value="DataScience"<?php print $spot_resp_row["sender_Course"];?>>DataScience</option>
<option value="Statistical Analysis"<?php print $spot_resp_row["sender_Course"];?>>Statistical Analysis</option>
<option value="Graphic Design"<?php print $spot_resp_row["sender_Course"];?>>Graphic Design</option>
<option value="Web Design"<?php print $spot_resp_row["sender_Course"];?>>Web Design</option>
<option value="Python Programming"<?php print $spot_resp_row["sender_Course"];?>>Python Programming</option>
<option value="C# Programming"<?php print $spot_resp_row["sender_Course"];?>>C# Programming</option>
<option value="Certified Ethical Hacking"<?php print $spot_resp_row["sender_Course"];?>>Certified Ethical Hacking</option>
<option value="Computer Network Defender"<?php print $spot_resp_row["sender_Course"];?>>Computer Network Defender</option>
<option value="Computer Hacking Forensics Investigator"<?php print $spot_resp_row["sender_Course"];?>>Computer Network Defender</option>

  
</select>

<br><br>
<!--Select intake-->
<label for="IntakeJanuary"required value="">Intake:</label><br>
<input type="radio"id="IntakeJanuary"name="Intake"value="January"<?php print $spot_resp_row["sender_Intake"];?> >
<label for="IntakeJanuary">January</label>


<input type="radio"id="IntakeApril"name="Intake"value="April" <?php print $spot_resp_row["sender_Intake"];?>>
<label for="IntakeApril">April</label>

<input type="radio"id="IntakeJuly"name="Intake"value="July" <?php print $spot_resp_row["sender_Intake"];?>>
<label for="IntakeJuly">July</label>
    
 <input type="radio" id="IntakeOctober" name="Intake"value="October"<?php print $spot_resp_row["sender_Intake"];?>>
 <label for="IntakeOctober">October</label><br>
   

<br><br>
<!--How did you know about us?-->
<label for="How did you hear about us?">How did you hear about us?</label><br>
<select name="Review"id="review"required  >

    <option value ="value= ">---select-</option>
    <option value="Website"<?php print $spot_resp_row["sender_Review"];?>>Website</option>
    <option value="Friends"<?php print $spot_resp_row["sender_Review"];?>>Friends/Family</option>
    <option value="SocialMedia"<?php print $spot_resp_row["sender_Review"];?>>Social Media</option>
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


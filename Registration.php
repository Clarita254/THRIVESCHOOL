   
   
   <?php require_once("includes/db_connect.php");
   include_once("templates/header.php");
   include_once("templates/nav.php");
  
   if(isset($_POST["Save_Details"])){
    //mysqli_real_escape_string($conn,addcslashes-Used for cleaning up data before entering in database-It ensures there is no sql injections
       $firstName=mysqli_real_escape_string($conn,addslashes($_POST["firstname"]));
       $lastName=mysqli_real_escape_string($conn,addslashes($_POST["lastname"]));
       $Email_Address=mysqli_real_escape_string($conn,addslashes($_POST["emailAddress"]));
       $PhoneNumber=mysqli_real_escape_string($conn,addslashes($_POST["phoneNumber"]));
       $Date_of_Birth=mysqli_real_escape_string($conn,addslashes($_POST["date_of_birth"]));
       $Gender=mysqli_real_escape_string($conn,addslashes($_POST["Gender"]));
       $course=mysqli_real_escape_string($conn,addslashes($_POST["course"]));
       $Intake=mysqli_real_escape_string($conn,addslashes($_POST["Intake"]));
       $Review=mysqli_real_escape_string($conn,addslashes($_POST["Review"]));
       

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
       $insert_responses= "INSERT INTO responses
       (sender_firstname,sender_lastname,sender_email,sender_phonenumber,sender_DOB,sender_Gender,sender_Course,sender_Intake,sender_Review)
      VALUES ('$firstName', '$lastName', '$Email_Address','$PhoneNumber','$Date_of_Birth','$Gender','$course','$Intake','$Review')";

     if ($conn->query($insert_responses) === TRUE) {
    header("Location:registration.php");
    exit();
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
   $conn->close();
   ?>

    <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
.header{
    font-size: xx-large;
    color:lightseagreen;
    text-decoration: underline;
}

p{
    font-size: x-large;
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

    <div class= "header">
    <h1 >Registration</h1>
</div>
        <div class="box-sizing">
         <div id="registrationForm">   
    <p >Fill the form below to Apply in Thrive Education Centre.Do not miss out on this opportunity!</p>
</div>
<!---Fill the follow below to register-->
    
        <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="POST"class="contact_form">
            
<!--Personal Details-->
<label for="FN"> FirstName:</label><br>
<input type="text" name="firstname"id="FN"placeholder="FirstName" required><br><br>

<label for="lN"> lastName:</label><br>
<input type="text" name="lastname"id="lN"placeholder="lastName" required><br><br>

<label for="Email_Address">Email_Address:</label><br>
<input type="email"id="Email_Address"name="emailAddress"placeholder="Email-Address"required><br><br>

<label for="PhoneNumber">PhoneNumber:</label><br>
<input type="text"name="phoneNumber"id="PhoneNumber"placeholder="PhoneNumber"required><br><br>

<label for="Date of Birth">Date_of_Birth:</label><br>
<input type="date"name= "date_of_birth"placeholder="range"required><br><br>

<!--End of personal Details-->

<label for="Gender"required>Gender</label><br>
<select name="Gender"id="">

<option value =" ">---Select Gender-</option>
<option value="Female">Female</option>
<option value="Male">Male</option>
<option value="Rather not say">Rather not say</option>
</select>


<select name="course"id=""required><br>
<!--Select a course-->
<option value="">---Select a course-</option>
<option value="Software Engineering">Software Engineering</option>
<option value="Mobile App Development">Mobile App Development</option>
<option value="CyberSecurity">CyberSecurity</option>
<option value="DataScience">DataScience</option>

  
</select>

<br><br>
<!--Select intake-->
<label for="Intake"required>Intake:</label><br>
    <input type="radio"id="Intake"name="Intake"placeholder="">

    <label for="January">January</label>
    <input type="radio"id="January"name="Intake"placeholder="January">

    <label for="April">April</label>
    <input type="radio"id="April"name="Intake"placeholder="April">

   <label for="July">July</label>
    <input type="radio"id="July"name="Intake"placeholder="July">

    <label for="October">October</label>
   

<br><br>
<!--How did you know about us?-->
<label for="How did you hear about us?">How did you hear about us?</label><br>
<select name="Review"id=""required>

    <option value =" ">---select-</option>
    <option value="Website">Website</option>
    <option value="Friends">Friends/Family</option>
    <option value="SocialMedia">Social Media</option>
    </select>
    
    <br><br>
<!--Input for saving details-->
    <input type="submit"name="Save_Details" value="Save Details">

</div>

<!--Confirmation Details-->
    <div id="ConfirmationMessage"style="display:none;color:green;">Details saved successfully!</div>

</form>

<?php include_once("templates/footer.php");?>


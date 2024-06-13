<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
h1{
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

</head>


<body >

    <?php include_once("templates/nav.php");?>
    <h1 >Registration</h1>
    
        <div class="box-sizing">
         <div id="registrationForm">   
    <p >Fill the form below to Apply in Thrive Education Centre.Do not miss out on this opportunity!</p>
</div>
<!---Fill the follow below to register-->
    <form>
        <form action="">
            
<!--Personal Details-->
<label for="FN"> FirstName:</label><br>
<input type="text"id="FN"placeholder="FirstName"><br><br>

<label for="lN"> lastName:</label><br>
<input type="text"id="lN"placeholder="lastName"><br><br>

<label for="Email-Address">Email-Address:</label><br>
<input type="email"id="Email-Address"placeholder="Email-Address"><br><br>

<label for="PhoneNumber">PhoneNumber:</label><br>
<input type="text"id="PhoneNumber"placeholder="PhoneNumber"><br><br>

<label for="Date of Birth">Date of Birth:</label><br>
<input type="date"placeholder="range"><br><br>

<!--End of personal Details-->
<label for="Gender">Gender</label><br>
<select name=""id="">

<option value =" ">---Select Gender-</option>
<option value="1">Female</option>
<option value="2">Male</option>
<option value="3">Rather not say</option>
</select>


<select name=""id=""><br>
<!--Select a course-->
<option value="">---Select a course-</option>
<option value="1">Software Engineering</option>
<option value="2">Mobile App Development</option>
<option value="3">CyberSecurity</option>
<option value="4">DataScience</option>

  
</select>

<br><br>
<!--Select intake-->
<label for="Intake">Intake:</label><br>
    <input type="radio"id="Intake"name="Intake"placeholder="">

    <label for="January">January</label>
    <input type="radio"id="January"name="Intake"placeholder="">

    <label for="April">April</label>
    <input type="radio"id="April"name="Intake"placeholder="">

   <label for="July">July</label>
    <input type="radio"id="July"name="Intake"placeholder="">

    <label for="October">October</label>

<br><br>
<!--How did you know about us?-->
<label for="How did you hear about us?">How did you hear about us?</label><br>
<select name=""id="">

    <option value =" ">---select-</option>
    <option value="1">Website</option>
    <option value="2">Friends/Family</option>
    <option value="3">Social Media</option>
    </select>
    
    <br><br>
<!--Input for saving details-->
    <input type="submit" value="Save Details">

</div>

<!--Confirmation Details-->
    <div id="ConfirmationMessage"style="display:none;color:green;">Details saved successfully!</div>

</form>
<script>
document.getElementById('RegistrationForm').addEventListener('submit',function(event){
    event.preventDefault();
    document.getElementById('ConfirmationMessage').style.display='block';

});

</script>
 

<?php include_once("templates/footer.php");?>

</body>
</html>
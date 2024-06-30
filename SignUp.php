<?php require_once("includes/db_connect.php");?>

<?php include_once("templates/header.php");?>
    <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>

        h1{
            font-family:Arial, Helvetica, sans-serif;
            
        }
        p{
            font-style:inherit;
            font-size: large;
        }
    </style>

<body>

<?php include_once("templates/nav.php");?>

    <!--Button to open the model-->
    <button onclick="document.getElementById('id01').style.display='block'" >Sign Up </button>
    
    <!---The Modal(contains the sign Up form)-->
    <div id ="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"title="Close Modal"></span>

<form action="user_processes.php"method="POST"autocomplete="off">
<form class="modal-content"action="/action_page.php">

    <div class="container">
        <h1>Sign Up</h1>
        <p> Please fill in this form to create an account.</p>
        <hr>

 
<label for ="fullname"><b>Fullname</b></label>
<input type="text"placeholder="fullname"name="fullname"required>

<label for ="Username"><b>Username</b></label>
<input type="text"placeholder="Username"name="Username"required><br>
       
<label for ="email"><b>Email</b></label>
<input type="text"placeholder="Email Address"name="email"required>

<label for="userType"><b>UserType</b></label>
<input type="userType" placeholder="userType"name = "userType" required><br>



<!----->
<label for="password"><b>Password</b></label>
<input type="password" placeholder="Password"name = "password" required><br>


<label for ="password-repeat"><b>Repeat Password</b></label>
<input type="password" placeholder="Repeat Password"name="password-repeat"required>

<input type="checkbox"checked="checked"name="remember" style="margin-bottom: 15px">Remember me 

</label>

<p>By creating an account you agree to our <a href="#" style="color: dodgerblue;"> Terms & Privacy</a>.</p>

<div class="clearfix">
    <button type="button"onclick="document.getElementById('id01').style.display='none'" class="cancelButton">Cancel </button>

    <button type="submit"class="signup">Sign Up</button>


</div>
 </div>
</form>
    </form>
</div>

<script>
    //Get modal
    var modal=document.getElementById('id01');

    //When the user clicks anywhere outside of the modal,It closes
    window.onclick=function(event){
        if(event.target==modal){
            modal.style.display="none";
        }
    }
</script>

</body>



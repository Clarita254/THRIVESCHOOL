
<?php require_once("includes/db_connect.php");
 include_once("templates/header.php");?>
  <?php include_once("templates/nav.php");?>  
    <style>

        body{
background-image: url(Images/Background/bb2.jpg);
        }

        .header-h{
            color:lightseagreen;
            font-size:large;
        }
    </style>

<body>
<div class= "header-h">
    <h1>SignIn</h1>
</div>
       
    
<div class="SignIn">
<form action=""method="">

<div class="imgcontainer">
<img src="Images/People/img_avatar2.png"alt="Avatar"class="avatar">
<img src="Images/People/img_avatar6.png"alt="Avatar"class="avatar">
</div>

<div class="container">
<label for="username"><b>Username:</label>
<input type="text"placeholder="Enter Username" name="username"required><br>

<label for="password"><b>Password:</label>
<input type="password"placeholder="Enter Password"name="password"required>
<label>
    <input type="checkbox"checked="checked"name="remember">Remember me
</label>

<button type="submit">Login</button>

<button type="button" class="cancelbutton">Cancel</button>
    <span class="password"><a href="#">Forgot Password?</a></span>



    </div>

 
</form>
</div>

<div class="container">
<?php require_once("templates/footer.php");?>
<div>

 
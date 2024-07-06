
<?php require_once("includes/db_connect.php");?>
<?php include_once("templates/header.php");?>
    <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .avatar{
            vertical-align:middle;
            width:50px;
            height:50px;
            border-radius:50%;
        }
    </style>

<body>

    <?php include_once("templates/nav.php");?>




    <!---Button to open the modal login form-->
    <button onclick="document.getElementById('id01').style.display='block'">
 Login</button>
 <!--The Modal-->
 <div id="id01"class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close"title="Close Modal">&times;</span>


    <!--Modal Content-->
<form class="modal-content animate"action="/action_page.php" action="user_processes.php"method="POST" autocomplete="off">
    <div class="imgcontainer">
        <img src="Images/People/img_avatar6.png"alt="Avatar" class="avatar">
        <img src="Images/People/img_avatar2.png"alt="Avatar" class="avatar">

    </div>
    <div class="containerSignIn">
        
        <label for="Username"><b>Username</b></label>
        <input type="text"placeholder="Enter Username"name="Username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="EnterPassword"name="password"required>
        <button type="submit">Login</button>
        <label>
           <input type="checkbox"checked="checked"name="remember">Remember <menu></menu>
        </label>

    </div>
    <div class="container"style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'"class="cancelbutton">Cancel</button>
        <span class="password">Forgot <a href="#">Password</a></span>

    </div>
</form>
 </div>

 <script>
    // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>




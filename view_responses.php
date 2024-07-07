

<?php include_once("templates/header.php");
      require_once("includes/db_connect.php");
      include_once("templates/header.php");
     include_once("templates/nav.php");



if(isset($_GET["DelId"])){
$DelId=mysqli_real_escape_string($conn,$_GET["DelId"]);

     // sql to delete a record
$del_resp = "DELETE FROM `responses` WHERE responseId='$DelId' LIMIT 1";

if ($conn->query($del_resp) === TRUE) {
  header("Location:view_responses.php");
  exit();
} else {
  echo "Error deleting record: " . $conn->error;
}
}


?>

    <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <style>
        .header-h1{
        font-size: large;
       color:lightseagreen;
       text-decoration: underline;
}

.Course th:nth-child(1),
    .Course td:nth-child(1) {
        width: 5%; /* SerialNumber column width */
    }

    .Course th:nth-child(2),
    .Course td:nth-child(2) {
        width: 10%; /* sender_firstName column width */
    }

    .Course th:nth-child(3),
    .Course td:nth-child(3) {
        width: 10%; /* sender_lastName column width */
    }
        </style>
    <body class="bgColor">
    <div class= "header-h1">
    <h1 >Responses</h1>
</div>


    <div id="courseCatalog">  
    <div style="overflow-x: auto;">   
   <div class=".Course tr:nth-child(odd)">
   <div class=".Course tr:nth-child(even)">
    <table class="Course">
    <tbody>
        <thead>
        <tr>
        <th>SerialNumber</th>  
        <th>sender_firstName</th>
        <th>sender_lastName</th>
        <th>sender_Email</th>
       <th>phoneNumber</th>
       <th>sender_DOB</th>
       <th>sender_Gender</th>
       <th>sender_Course</th>
       <th>sender_Intake</th>
       <th>sender_Review</th>
       <th>Time</th>
       <th>Actions</th>


</tr>
</thead> 

<?php
$select_response= "SELECT * FROM `responses`ORDER BY datecreated DESC";
$sel_resp_result = $conn->query($select_response);
/*cout response*/
$cr=0;

if ($sel_resp_result->num_rows > 0) {
  // output data of each row
  while($sel_resp_row = $sel_resp_result->fetch_assoc()) {
    $cr++;

     ?>
     <tbody>
        <tr>   
        <td><?php print $cr;?>.</td>
        <td><?php print $sel_resp_row["sender_firstname"]?></td>
        <td><?php print $sel_resp_row["sender_lastname"]?></td>
        <td><?php print $sel_resp_row["sender_email"]?></td>
        <td><?php print $sel_resp_row["sender_phonenumber"]?></td>
        <td><?php print $sel_resp_row["sender_DOB"]?></td>
        <td><?php print $sel_resp_row["sender_Gender"]?></td>
        <td><?php print $sel_resp_row["sender_Course"]?></td>
        <td><?php print $sel_resp_row["sender_Intake"]?></td>
        <td><?php print $sel_resp_row["sender_Review"]?></td>
        <td><?php print date("d-M-Y H:i",strtotime( $sel_resp_row["datecreated"]));?></td>
        <td>[<a href="edit_resp.php?responseId=<?php print $sel_resp_row["responseId"];?>">Edit</a>] [ <a href="? DelId=<?php print $sel_resp_row["responseId"]; ?>">Del</a>]</td>
        </tr>

   <?php
  }
} else {
  echo "0 results";
}

?>
</tbody>
</table>

</div> 
</div>
</div>
</div>

<?php include_once("templates/footer.php");?>




    
<?php include_once("templates/header.php");?>

    <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<body class="bgcolor">
<!---- include_once is used for reusing code-->
    <?php include_once("templates/nav.php");?>
    <div class="team-description">
    <h1>Our Team </h1>
    <p1>Get to know  the passionate and dedicated individuals who make ThriveEducation Centre a success.Our Team is here to partner with you and provide the right solutions for your success.<br></p1>

</div> 

<div class="team-container">


<div class="team-member">

<img src="Images/People/pp39.jpg"alt=" James Smith"width="40%">
<div class="member-info">
<h4>James Smith </h4>
<p>Chief Executive Officer</p>
</div>

</div>
<!---->
<!--The team portfolio-->
<div class="team-member">
    <img src="Images/People/pp46.jpg"alt="Sophia Miller">
    <div class="member-info">
   <h4>Sophia Miller</h4>   
   <p>Managing Director </p>  
</div>
</div>
<!----->
<div class="team-member">
    <img src="Images/People/pp48.jpg"alt="Roberto Johnson">
    <div class="member-info">
        <h4>Roberto Johnson</h4>
        <p>HR Manager</p>
</div>
</div>
<!---->
<div class="team-member">
    <img src="Images/People/pp43.jpg"alt="Rosa Luengo"width="40%">
    <div class="member-info">
        <h4>Rosa Luengo</h4>
        <p>HOD Training</p>
</div>
</div>


</div>



<div class="about">
    
    <!--Vision Statement-->
    
    <h1 >Our Vision</h1>
    <p1 >To be the leading force in revolutionizing the computing sector,driving progress through creating technological solutions that enhance lives and inspire Innovation globally.
    </p1>
    <div class="rounded">
     <!--Images-->
    <img src="Images/People/pp4.jpg"width="40%"class="rounded">
    <img src="Images/People/pp5.jpg"width="40%" class="rounded">
</div>
<!--Mission Statement-->
    <h1 >Our Mission</h1>
    <p1 > We provide training solutions that are based on innovative, dynamic and relevant technologies through international partnership, qualified team of people and world class facilities. 
        We partner with our customers to provide them with right solutions that leads to their success. 
        We build the capacity of our nation in order to improve productivity.</p1>

 <!--Values statement-->
    <h1 >Our Values</h1>
    
    <div class="rounded">
        <img src="Images/People/pp6.jpg"width="40%" class="rounded">
        <img src="Images/People/pp7.jpg"width="40%" class="rounded">

    </div>   
    <p1 ><br>To be a market leader in providing quality training solutions that meets the daily advancement in Information and Communication Technology (ICT). 
    To offer cutting edge technology transfer, provide affordable training solutions with excellence, transparency and integrity backed with a thoroughly inculcated knowledge based and skills.
    </p1>

    <div class="rounded">
    <img src="Images/People/pp8.jpg"width="40%" class="rounded">
    <img src="Images/People/pp10.jpg"width="40%" class="rounded">

</div>
<!--Createing a collapsible button--->
<button type="button" class="collapsible">Open Collapsible</button>
<div class="content">
    <h1 >Our  Journey</h1>
<p1>Thrives Education Centre was founded in 2010 by a group of visionary IT Specialists and enterprenuers with a shared pasion for pushing the computingtechnology to a level high.The founders of the Thrive Education Centre  set to revolutionize the ICT industry with their innovative appraoch to equipping individuals with Knowledge,Capabiity and skills.The School started off by Introducing a 5-6 months Software Development course and CyberSecurity Course.The school has embarked on a journey that would integrate over 8000+learners from diverse backgrounds and experiences while channeling their motivation to learn and grow through market-aligned curriculum and having a learning approach that producing learners with capability and skills to apply techniques in Job Opportunities.
As Thrive Education Centre looks into the future,Its committment to excellence,Innovation and Customer satistfaction remains unwavering.</p1>
</div>

<h1>Why choose us</h1>
<p1 >We are able to empower individuals by providing tools and platforms to streamline processes,improve decision-making and unlock new opportunities for growth and innovation. </p1>

<!------>

</div>
<script>

    var coll = document.getElementsByClassName("collapsible");
    var i;
    
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }
    </script>



<!---- include_once is used for reusing code-->
<?php include_once("templates/footer.php");?>


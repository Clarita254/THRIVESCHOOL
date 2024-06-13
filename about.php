<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <style>

h1{
    text-align:justify;
    color:darkorange;
}
h2{
    font-size:xx-large ;
    text-align: justify;
    color: darkorange;
}
p1{
    font-size:large;
   
}
h3{
    color: darkorange;
    font-size: xx-large;
    
}
p2{
    font-size:large;
}
.container{
    padding-bottom: 10px;
}

    </style>
</head>
<body class="bgcolor">
    <?php include_once("templates/nav.php");?>
    

<div class="container">
    
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
    <h2 >Our Mission</h2>
    <p1 > We provide training solutions that are based on innovative, dynamic and relevant technologies through international partnership, qualified team of people and world class facilities. 
        We partner with our customers to provide them with right solutions that leads to their success. 
        We build the capacity of our nation in order to improve productivity.</p1>

 <!--Values statement-->
    <h2 >Our Values</h2>
    
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
<button type="button" class="collapsible">Open Collapsible</button>
<div class="content">
    <h3 >Our  Journey</h3>
<p2>Thrives Education Centre was founded in 2010 by a group of visionary IT Specialists and enterprenuers with a shared pasion for pushing the computingtechnology to a level high.The founders of the Thrive Education Centre  set to revolutionize the ICT industry with their innovative appraoch to equipping individuals with Knowledge,Capabiity and skills.The School started off by Introducing a 5-6 months Software Development course and CyberSecurity Course.The school has embarked on a journey that would integrate over 8000+learners from diverse backgrounds and experiences while channeling their motivation to learn and grow through market-aligned curriculum and having a learning approach that producing learners with capability and skills to apply techniques in Job Opportunities.
As Thrive Education Centre looks into the future,Its committment to excellence,Innovation and Customer satistfaction remains unwavering.</p2>
</div>

<h3 >Why choose us</h3>
<p2 >We are able to empower individuals by providing tools and platforms to streamline processes,improve decision-making and unlock new opportunities for growth and innovation. </p2>

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
<!--footer--->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-column get-in-touch">
    <h4>Get in Touch </h4>
    <p> General inquiries (+254)711-087-278</p>
    <p>contact@thriveeducationcentre.com</p>
    <p>Working Hours</p>
    <p>Monday-Friday  9:00am-5:30pm</p>
    <p>Saturday 9:00am-1:00pm</p>
    
    <p>Hurligham Lane,Hurligham Plaza,4th floor,Nairobi Kenya</p>
    
        </div>
    
        <div class="footer-column company">
            <h4>Company</h4>
            <p><a href="index.html">Home</a></p>
            <p><a href="about.html">About</a></p>
            <p><a href="Courses.html">Courses</a></p>
            <p><a href="FinancialAid.html">FinancialAid</a></p>
            <p><a href="ContactUs.html">ContactUs</a></p>
            <p><a href="Collaborating.html">Collaborating</a></p>
            <p><a href="Registration.html">Registration</a></p>
            <p><a href="CourseCatalog.html">CourseCatalog</a></p>
            
        </div>
    
        <div class="footer-column quick=links">
            <h4>Quick Links</h4>
            <p><a href="FAQs.html">FAQs</a></p>
            <p><a href="SignUp.html">SignUp</a></p>
            <p><a href="SignIn.html">SignIn</a></p>
            
        </div>
    
        <div class="footer-social-icons">
            <p1>Social Media||</p1>
            <a href="https://www.facebook.com" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.linkedin.com" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.twitter.com" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com" target="_blank" class="social-icon"><i class="fab fa-youtube"></i></a>
        </div>
        
        <div class="footer-copyright">
            <p>Copyright -Thrive Education Centre &copy;- Allrights Reserved</p>
        </div>
        
    </div>
    </footer>

</body>
</html>
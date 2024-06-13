<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>
    
    <?php include_once("templates/nav.php");?>

        <!--Creates header section with background image-->
        <div class="faq-header">
            <!--used to add a dark overlay and center the title-->
            <div class="faq-overlay">
                <h1>FAQs</h1>

            </div>
        </div>

<!---FAQ content-->
<!--contains FAQ items with Questions and Answers-->
<div class="faq-container">
    <div class="faq-item">
        <div class="faq-question" onclick="toggleFAQ(this)">
            <span>Q:Do you offer Accomodation?</span>
            <span class="faq-icon">+</span>

        </div>
        <div class="faq-answer">
            <p>No,we currently don't provide accomodation.However,there are a number of private hostels along hurligham,which are close to the school.</p>
</div>
     </div>
     <div class="faq-item">
        <div class="faq-question" onclick="toggleFAQ(this)">
            <span>Q:Will you get a certificate upon completion?</span>
            <span class="faq-icon">+</span>
   </div>
   <div class="faq-answer">
    <p>Yes,you will get a digital certificate after the successful completion of the program.A physical certificate can be printed for you at your cost.</p>
   </div>


 </div>
 <!----->
 <div class="faq-item">
    <div class="faq-question" onclick="toggleFAQ(this)">
        <span>Q:What if I am not familiar with programming?</span>
        <span class="faq-icon">+</span>

    </div>
    <div class="faq-answer">
        <p>Our course introduces you to basic programming therefore this course is for beginners to learn the fundamentals of programming as well and established developers to sharpen their skillss.Visit our course page to learn more.</p>
</div>
 </div>

</div>
<!--ToggleFAQ is used to show and hide the answers when questions are clicked -->
<script src="javascript/script.js">

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
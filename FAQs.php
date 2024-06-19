
<?php include_once("templates/header.php");?>


    <link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



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
<script >



</script>

<?php include_once("templates/footer.php");?>


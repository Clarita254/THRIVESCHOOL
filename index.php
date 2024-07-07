<!--when you get a warning but the rest of the page is displayed use include--->
<?php include_once("templates/nav.php");?>
<!--When you want to get a warning and a fatal error hence page is not displayed.When you want your page to be displayed so that their shouldn't be an error use required-->
<?php require_once("templates/header.php");?>

<!--inquire and require are more or less the same the difference comes to the error-->   

<link rel="stylesheet" href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>

h1{
 text-align:left;
font-size: x-large;
 color:lightseagreen;
 font-family: Verdana, Geneva, Tahoma, sans-serif;
 text-transform: uppercase;
text-decoration: wavy;

     }


h2{

text-align:justify;
font-family:'Segoe UI', Tahoma, Geneva,Verdana, sans-serif;
line-height:25px;
font-size:medium;
font-style:italic;
color:blueviolet;

}

h3{
        font-size: medium;
        font-style: oblique;
        color: rgb(33, 33, 91);
     }


li{

font-size: medium;
font-style: oblique; 


}

 .div{
        padding-bottom:5px;
    }

    </style>

<body class="bgcolor">


<?php include_once("templates/nav.php");?>
    
    
    <!--header -->
 
<div class="div">
    
    <h1>||Nurturing People into Tech||</h1>
    <!--Heading One-->



 <h2 >Welcome to our page|THE THRIVE EDUCATION CENTRE|</h2>

 <div class="rounded">
    
    <img src="Images/People/pp1.jpg"width=30% class="rounded">
    <img src="Images/People/pp2 (2).jpg"width=30% class="rounded" >
    <img src="Images/People/pp3 (2).jpg"width=30% class="rounded" >

    
 </div>
 
 
<h3 > Through market aligned skills Training,we are able to excellent career opportunities and capabilities!</h3>

<li>Discover </li>  <li >Learn</li><li>Transform</li> <li>Apply</li>


<br>
</div>

<?php include_once("templates/footer.php");?>

<?php
   session_start();
   if(isset($_SESSION['email']) == false){
      header('location:index1.php');
   }
?>
<?php
   include("nav.php");
?>

<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style/main_style.css">
   <title> About Us </title>
</head>
<body>
   <div class="about">
   <section class="section" id="benefits">
     <div class="paras">
      <p class="sectiontag text-big">SHYAM PATEL</p>
      <p class="sectionsubtag text-small"></br> Gender : Male </br> E-mail : 21it120@charusat.edu.in
      </p>
     </div> 
      <div class="thumbnail1">
        <img src="img/swet.png" alt="img" class="imgfluid">
      </div>
   </section>

   <section class="section left">
     <div class="paras">
      <p class="sectiontag text-big">Anand Parmar</p>
      <p class="sectionsubtag text-small"></br> Gender : Male </br> E-mail : 21it102@charusat.edu.in
      </p>
     </div> 
      <div class="thumbnail1">
        <img src="img/swet.png" alt="img" class="imgfluid">
      </div>
   </section>
   </div>
   
   <?php include("contact.php"); ?>

</body>
</html>
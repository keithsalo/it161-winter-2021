<!DOCTYPE html>
<html lang="en">
 <head> 
  <title>Web Developer Examples and Resources by Keith Salo</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/final.css" />
  <link rel="stylesheet" href="css/nav.css" />
  
        <!-- jQuery -->
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <!-- MenuMaker Plugin -->
     <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
     <!--  Icon Library -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
     <script src="js/script.js"></script>
 </head>
 <body>

     
   <main>
       
      
</nav>
            </nav>
        </header>
     
        <!-- START LEFT COLUMN -->
        <section class="fullwidth"> 
        <h2 class="subheader">Contact Amber Davenport</h2>
            <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "AmberDavDesign@gmail.com";  //place your/your client's email address here
        $toName = "Amber Davenport"; //place your client's name here
        $website = "Amber Davenport Design";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        // echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
             
           
        </section>
       <!-- END LEFT COLUMN -->

     
     <footer>
         <p><small>&copy; 2021 <a href="contact.php">Contact Amber Davenport </a>, All Rights Reserved ~  <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
     
     
 </body>
</html>
<!DOCTYPE html>
<html lang="en">
 <head> 
  <title>Web Developer Examples and Resources by Keith Salo</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/tables.css" />
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
       
       <header>
           <h1><a href="index.html">Web Developer Examples and Resources by Keith Salo</a></h1>
            <nav>
            <nav id="cssmenu">
  <ul>
     <li><a href="../index.html"><i class="fa fa-fw fa-institution"></i> WEB110</a></li>
     <li><a href="index.html"><i class="fa fa-fw fa-home"></i> BIG Website</a></li>
      <li><a href="gallery.html"><i class="fa fa-fw fa-camera-retro"></i> Lightbox II Gallery</a></li>
     
      <!-- drop down menu for research pages -->
       <li><a href="#">Research Topics</a>
        <ul>
            <li><a href="smo.html"><i class="fa fa-fw fa-thumbs-o-up"></i> SMO</a></li>
            <li><a href="accessibility.html"><i class="fa fa-fw fa-globe"></i> Accessibility</a></li>
            <li><a href="forms.html"><i class="fa fa-fw fa-desktop"></i> Web Forms</a></li>
     
        </ul>
     </li>
      
     
       <!-- drop down menu for google tool pages -->
     <li><a href="#">Google Tools</a>
        <ul>
           <li><a href="seo.html"><i class="fa fa-fw fa-desktop"></i> SEO</a></li>
           <li><a href="calendar.html"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
           <li><a href="map.html"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
        </ul>
     </li>
     <li><a href="contact.php"><i class="fa fa-fw fa-server"></i> Contact Me</a></li>
  </ul>
</nav>
            </nav>
        </header>
     
        <!-- START LEFT COLUMN -->
        <section class="fullwidth"> 
        <h2 class="subheader">Contact Keith</h2>
            <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "keithsalo@gmail.com";  //place your/your client's email address here
        $toName = "Keith Salo"; //place your client's name here
        $website = "Amber Davenport Design";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        // echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
             
           
        </section>
       <!-- END LEFT COLUMN -->

     
     <footer>
         <p><small>&copy; 2021 <a href="contact.php">Contact Keith Salo </a>, All Rights Reserved ~  <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
     
     
 </body>
</html>
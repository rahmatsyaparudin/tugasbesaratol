<?php 
    session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Infinite Scale</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>

<?php 
  include 'maps.php';
  include 'lib_func.php';
?>

</head>
<body id="top">

<div class="wrapper row1">
<div id="header" class="clear">
      <?php 
        header_web(); 
        sigin_form();
        ?>
    </div> 
	
</div>

<div class="wrapper row2">
	<?php menu_utama(); ?>
</div>

<div class="wrapper row3">
	<?php include 'slide.php' ?>  
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        
        <h2 class="title">Latest Gallery Images</h2>
        <div id="hpage_gallery">
          <ul class="clear">
            <li><a href="#"><img src="images/demo/175x130.gif" alt="" /></a></li>
            <li class="last"><a href="#"><img src="images/demo/175x130.gif" alt="" /></a></li>
            <li><a href="#"><img src="images/demo/175x130.gif" alt="" /></a></li>
            <li class="last"><a href="#"><img src="images/demo/175x130.gif" alt="" /></a></li>
            <li><a href="#"><img src="images/demo/175x130.gif" alt="" /></a></li>
            <li class="last"><a href="#"><img src="images/demo/175x130.gif" alt="" /></a></li>
          </ul>
        </div>
      </div>
      <!-- ############### -->
      <div class="fl_right">
        <h2 class="title">Latest News</h2>
        <div id="hpage_latestnews">
          <ul>
            <li>
              <div class="imgl"><img src="images/demo/160x80.gif" alt="" /></div>
              <p class="latestnews">This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>
              <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </li>
            <li>
              <div class="imgl"><img src="images/demo/160x80.gif" alt="" /></div>
              <p class="latestnews">You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
              <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </li>
            <li class="last">
              <div class="imgl"><img src="images/demo/160x80.gif" alt="" /></div>
              <p class="latestnews">Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis. Maecenaset adipiscinia tellentum nullam velit et a convallis curabitae vitae laoreet niseros ligula sem sed susp en at.</p>
              <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<div class="wrapper">
	<?php footer_web(); ?>
</div>
</body>
</html>
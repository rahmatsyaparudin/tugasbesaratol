<?php

function koneksi_db(){ 
	$host ="localhost"; 
	$database ="sigeo"; 
	$user="root"; 
	$password=""; 
	$link=mysql_connect($host,$user,$password); 
		mysql_select_db($database,$link); 
	if(!$link) 
		echo "Error:".mysql_error(); 
	return $link; 
} 

function header_web(){ ?>
	<div class="fl_left"> 
	  <h1><a href="index.php">Infinite Scale</a></h1>
      <p>Business Plan Bandung Barat</p>
    </div>
    <?php
}

function form_login(){ ?>
	<form action="login.php" method="post" id="login">
    	<fieldset>
        	<legend>Login</legend>
        	<input type="password" name="userpass" placeholder="Password" />
        	<input type="text" name="username" placeholder="Username" />
        	<div id="forgot">Already Sign Up? ||</a> or <a href="#">Sign Up</a></div>
        	<input type="image" src="images/sign_in.gif" id="signin" alt="Sign In" />
      	</fieldset>
    </form>
	<?php
}

function sigin_form(){
		$telahlogin=isset ($_SESSION['sudahlogin']);
		if($telahlogin==false){
			form_login();
		} else {
			echo "<a href=logout.php> Logout </a>";
		}
	}

function footer_web(){ ?> 
	<div id="copyright" class="clear">
    	<p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    	<p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
	</div>
	<?php
} 

function menu_utama(){ ?>
	<div id="topnav">
	    <ul>
	      <li class="active"><a href="index.php">Homepage</a></li>
	      <li><a href="pendaftaran.php">Pendaftaran</a></li>
	      <li><a href="full-width.php">Maps</a></li>
	      <li><a href="#">DropDown</a>
	        <ul>
	          <li><a href="#">Link 1</a></li>
	          <li><a href="#">Link 2</a></li>
	          <li><a href="#">Link 3</a></li>
	        </ul>
	      </li>
	    </ul>
    <div  class="clear"></div>
  	</div>

	<?php
	}


?>
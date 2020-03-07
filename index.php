<?php
include('login.php');
if(isset($_SESSION['login_user']))
{
	header("location: index.php");
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RogerTech Support</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="JavaScript/complex.js"></script>
  </head>
<body>
<nav>
	<div class="nav-container">
		<ul >
		<li class="selected"> <a href="index.php">HOME</a></li>
		<li> <a href="services.php">SERVICES</a></li>
		<li> <a href="contact.php">CONTACT US</a></li>
		<li> <a href="login-account.php">Login</a></li>
		</ul>

	</div>
</nav>
<header>


	<div id="tfheader">
		<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
		</form>
	<div class="tfclear"></div>
	</div>
	<div class="wrap1">
		<div class="imgzcontain1">
	<div class="container-slidez">
		<ul class="slides">
    			<input type="radio" name="radio-btn" id="img-1" checked />
    			<li class="slide-container">
		<div class="slide">
			<img src="img/1.jpg" />
        	</div>
		<div class="nav">
			<label for="img-6" class="prev">&#x2039;</label>
			<label for="img-2" class="next">&#x203a;</label>
		</div>
    		</li>

    		<input type="radio" name="radio-btn" id="img-2" />
    		<li class="slide-container">
    		    <div class="slide">
          			<img src="img/7.jpg" />
        	</div>
		<div class="nav">
			<label for="img-1" class="prev">&#x2039;</label>
			<label for="img-3" class="next">&#x203a;</label>
		</div>
    		</li>

			<input type="radio" name="radio-btn" id="img-3" />
    		<li class="slide-container">
        		<div class="slide">
          			<img src="img/3.jpg" />
        		</div>
		<div class="nav">
			<label for="img-2" class="prev">&#x2039;</label>
			<label for="img-4" class="next">&#x203a;</label>
		</div>
    		</li>

    			<input type="radio" name="radio-btn" id="img-4" />
    		<li class="slide-container">
        		<div class="slide">
          			<img src="img/4.jpg" />
        	</div>
		<div class="nav">
			<label for="img-3" class="prev">&#x2039;</label>
			<label for="img-5" class="next">&#x203a;</label>
		</div>
    		</li>

    			<input type="radio" name="radio-btn" id="img-5" />
    		<li class="slide-container">
        	<div class="slide">
          	<img src="img/5.jpg" />
        	</div>
		<div class="nav">
			<label for="img-4" class="prev">&#x2039;</label>
			<label for="img-6" class="next">&#x203a;</label>
		</div>
    		</li>

    		<input type="radio" name="radio-btn" id="img-6" />
    		<li class="slide-container">
        	<div class="slide">
          	<img src="img/6.jpg" />
        	</div>
		<div class="nav">
			<label for="img-5" class="prev">&#x2039;</label>
			<label for="img-1" class="next">&#x203a;</label>
		</div>
    		</li>
    		<li class="nav-dots">
			<label for="img-1" class="nav-dot" id="img-dot-1"></label>
			<label for="img-2" class="nav-dot" id="img-dot-2"></label>
      			<label for="img-3" class="nav-dot" id="img-dot-3"></label>
      			<label for="img-4" class="nav-dot" id="img-dot-4"></label>
      			<label for="img-5" class="nav-dot" id="img-dot-5"></label>
      			<label for="img-6" class="nav-dot" id="img-dot-6"></label>
    		</li>
		</ul>
		</div>

	</div>
</header>
	
<div class="nf-wrap">
<div class="nf-container">
		<div class="nf-container1">
		<pre> 
		<a href="order.html" class="hvr-buzz"><img src="img/food.png" class="icons" width="80" heigth="80"></a>
	Order Foods</pre></div>
		<div class="nf-container2">
		<pre> 
		<a href="order.html" class="hvr-buzz"><img src="img/onlineshop.png" class="icons" width="80" heigth="80"></a>
	Order Items</pre>
		</div>
		<div class="nf-container3">
		<pre> 
		<a href="order.html" class="hvr-buzz"><img src="img/book.png" class="icons" width="80" heigth="80"></a>
	Book Travels</pre>
		</div>
		<div class="nf-adz"><img src="img/1.jpg" width="240" height="110"><p> Advertising  agency  that  helps enterprenuers  publish 
 their official  website. We provide concept  and visualized
 your  imagination  to   its  technological   advertisement. With the help of
 our developers  team  from floor planning, contruction  to  advertisement.
</p><div>

	</div>
</div></div>

<footer class="footwrap">
<div class="footcont">	
	<div class="left">
		<p class="ftr1">
Developed by: Roger Rara <br>
Follow us  
		<a class="hvr-buzz" href="#"><img src="img/gmail.png" class="icons" width="20" heigth="20"></a><a class="hvr-buzz" href="https://www.facebook.com/yabo.tupik?viewas=100000686899395&privacy_source=timeline_gear_menu">
	<img src="img/fb.png" class="icons" width="20" heigth="20"></a></p>


	</div>
	<div class="right">
<pre class="ftr2">All Rights Reserved. Copyright 2020
</pre>
  	</div>
</div>
</footer>
</body>
</html>
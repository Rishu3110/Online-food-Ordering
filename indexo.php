
<html>
<head>
<link rel="stylesheet" type="text/css" href="restrau.css">
<style>



<!--slidee-->

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  border:solid black;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 5px;
  width: 5px;
  margin: 0 0px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

<!--news1-->
.im1{
background-color:"black;"
margin-bottom:20px;
}
</style>
</head>
<body class="bb">
<div class="fname">
<img src="loog2.jpg">
<font siz"+2">
<b>Black Pepper.....</b>
</font>
</div>
<br><br>
<center>
<div class="maincont">
  <div class="navigation";>
      <div class="butn">
	<a class="active" href="indexo.php">  <b>HOME</b> </a>
	   </div>
	    <div class="dropdown">
  <span><b>Menu</b></span>
  <div class="dropdown-content">
   <a  href="menust.php">  <b>Starter</b> </a> <br><br>
	 <a href="menumc.php">  <b>Main Course</b> </a>  <br><br>
	 <a href="menusld.php">  <b>Salad</b> </a>  <br><br>
	 <a  href="rishu.php">  <b>Dessert</b> </a> <br><br>
	 <a class="active" href="menudr.php">  <b>Beverages</b> </a>  <br><br>
	 
  </div>
</div> 
	   <div class="butn">
	<a href="gallery.html">  <b>Gallery</b> </a>
	   </div>
	   <div class="butn">
	<a href="aboutus.html">  <b>About us</b> </a>
	   </div>

	   <div class="butn">
	 <a href="login.html">  <b>Login</b> </a>
	   </div>
	   <div class="butn">
	 <a href="signuppage.html">  <b>signup</b> </a>
	   </div>
	 </div>
	 
	<!--slideee--> 
<br>
<br>
<br>
<br>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="m333.jpeg" style="width:100%">
 
</div>

<div class="mySlides fade">
  
  <img src="m222.jpeg" style="width:100%">
 
</div>

<div class="mySlides fade">
  <img src="f11.jpg" style="width:100%">
 
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<br>
<!--slideshow ends-->
<!--about us-->
<br><br><br><br><br><br><br><br><br>
<center>
<table>
<tr><div class="im1">
<td>
Contact us on <br>9120190922  ,9029111010
<br>
blackpepper@gmail.com
</td>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
<td>
Follow us on<br>
Instagram @ pepper23
<br>
Facebook @blackpepper
</td></div>
</tr>

</table>
</center>


</div>
</center>
<div class="foot">
<marquee>Black Pepper </marquee>
	
</div>
<!--slideshow-->

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>





</body>

</html>
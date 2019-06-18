
<html>
<head>

<link rel="stylesheet" type="text/css" href="restrau.css">
<style>
.r1{
background-color:black;
height:100px;
width:100%;
border-radius: 0px 50px 0px 50px;
}
.r2{
width:75%;
align:center;
font-family: Arial;
font-size:10px;
}
.active{
 background-color: blue;
}
.bb{
background-image :url("w1.jpg");
}
</style>
</head>

<body class="bb">

<div class="fname">

<b>Black Pepper.....</b>
</div>

<div class="maincont">
  <div class="navigation";>
      <div class="butn"> 
	<a href="indexo.php">  <b>HOME</b> </a>
	   </div>
	    <div class="dropdown">
  <span><b>Menu</b></span>
  <div class="dropdown-content">
   <a  href="menust.php">  <b>Starter</b> </a> <br><br>
	 <a  class="active" href="menumc.php">  <b>Main Course</b> </a>  <br><br>
	 <a href="menusld.php">  <b>Salad</b> </a>  <br><br>
	 <a  href="menuds.php">  <b>Dessert</b> </a> <br><br>
	 <a href="menudr.php">  <b>Beverages</b> </a>  <br><br>
	 
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
	 <!--navigaton end-->
<br><br>	
	<div class="r1">
	<!--div class="glow"-->
	<b><font face="lucida Calligraphy",font size="+3",font color="white",margin-bottom="10%">
	 &nbsp &nbsp The best dish of our Restraurant is <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	 the whole left side of our menu..!!
	 </font></b>
	 <!--/div--></div>
	 <br><br>
	 <center>
	  <div class ="r2">
	
	 
	 <?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('Could not connect'.mysql_error());
}


mysql_select_db("hotel",$con);
$result=mysql_query("SELECT dname,cost FROM dishes where type='mainc';");
while($row=mysql_fetch_array($result))
{ ?>
<form>
<table>

<tr>

<td>
<?php
	echo $row['dname'];
?>
</td>
<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</td>
<td>
<?php
	echo $row['cost'];
?>
</td>

	</tr>
	</table>
	
		</form>

	<?php
}
?>
	 
	 <tr>
	 
	 <td>
<form action="order.php" method="post" >
 <input type="text" name="c1" placeholder="item name" required/>

</td>
<td>

 <input type="text" name="quant" placeholder="quantity" required/>

</td>
</tr>
	<input type="submit"/>
	</form>
	<?php
	
mysql_close($con);
?>
	 
	 </center>
	 </div>
	 
	
	  <div class="im">
	 
	 </div>
	
	
	</div> 
	
<div class="foot">
<marquee>Black Pepper</marquee>

</div>
</body>
</html>
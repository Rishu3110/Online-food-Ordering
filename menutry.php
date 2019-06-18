
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
	<a href="ordertry.php">  <b>HOME</b> </a>
	   </div>
	    
	   <div class="butn">
	<a href="menutry.php">  <b>modify menu</b> </a>
	   </div>
	   <div class="butn">
	<a href="emp.php">  <b>modify employee</b> </a>
	   </div>
	 <!--navigaton end-->
<br><br>	
	
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
$result=mysql_query("SELECT did,dname,type,cost FROM dishes");
?>
	 <table>
	<tr><font face="lucida Calligraphy",font size="+1",font color="black",margin-bottom="10%"><th>dish id</th><th>&nbsp &nbsp &nbsp </th>
	<th>dish name</th><th>&nbsp &nbsp &nbsp</th><th>dish type</th><th>&nbsp &nbsp &nbsp</th><th>dish cost</th>
	</tr>
	</table>
	<?php
while($row=mysql_fetch_array($result))
{ ?>
<form>

<table><b>
<tr>

<td><font face="lucida Calligraphy",font size="+1",font color="black",margin-bottom="10%">
<?php
	echo $row['did'];
?>
</td>
<td>&nbsp &nbsp &nbsp &nbsp </td>
<td>
<?php
	echo $row['dname'];
?>
</td>
<td>&nbsp &nbsp &nbsp &nbsp </td>

<td>
<?php
	echo $row['type'];
?>
</td>
<td>&nbsp &nbsp &nbsp &nbsp </td>
<td>
<?php
	echo $row['cost'];
?>
</td>



	</tr>
	</b></table>
	
		</form>

	<?php
}
?>
	 
	 <tr>
	 
	 <td>
	 
	<a href=adddish.php><input type="button" name="b1" value="add dishes"></a>	<?php
	
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

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
	<a href="menutry.php">  <b>HOME</b> </a>
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
$result=mysql_query("SELECT ename,eid,doj,salary,designation FROM chef");
?>
	 <table>
	<tr><font face="lucida Calligraphy",font size="+1",font color="black",margin-bottom="10%">
	<th> id</th><th>&nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp  </th><th> name</th><th>&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  </th>
	<th>doj</th><th>&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  </th><th>salary</th> <th>&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp </th><th>designation</th>
	</tr>
	</table>
	<?php
while($row=mysql_fetch_array($result))
{ ?>
<table>
<tr>
<td><font face="lucida Calligraphy",font size="+1",font color="black",margin-bottom="10%">
<?php
	echo $row['eid'];
?>
</td>
<td>&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp </td>
<td>
<?php
	echo $row['ename'];
?>
</td>
<td>&nbsp &nbsp &nbsp &nbsp </td>

<td>
<?php
	echo $row['doj'];
?>
</td>
<td>&nbsp &nbsp &nbsp &nbsp </td>
<td>
<?php
	echo $row['salary'];
?>
</td>
<td>&nbsp &nbsp &nbsp &nbsp </td>
<td>
<?php
	echo $row['designation'];
?>
</td>



	</tr>
	</b>
	</table>
	
		

	<?php
}
?>
	 
	 <tr>
	 
	 <td>
	 
	<a href=log.php><input type="button" name="b1" value="add employee"></a>	<?php
	
mysql_close($con);
?>
	 
	 </center>
	 </div>
	 
	
	  <div class="im">
	 
	 </div>
	
	
	</div> 
	<table>
	<tr>
	<td>world</td><td>hegggggo</td>
	</tr>
	<tr>
	<td>worl ddddd</td><td>hello</td>
	</tr>
	</table>
<div class="foot">
<marquee>Black Pepper</marquee>

</div>
</body>
</html>
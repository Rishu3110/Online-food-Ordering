<html>
<head>

<!--<link rel="stylesheet" type="text/css" href="restrau.css">-->
<title>
Order
</title>
<style>
.main11{

height:100%;
width:100%;
padding: 0px 0px;
background-image:url("w4.jpeg");
background-size:"cover";
}
im10{
width:400px;
float:left;
}
.im11{
width:310px;
float:left;

}
.i11{
width:100%;

}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>

</head>
<body>
<div class="main11">

<table>
<tr>
<td><img src="de1.jfif"></td>
</tr>
</table>
<center>
<div class="im10" style="width:400px;">
<form action="menust.php" method="post" >
<table>
<tr>
<td>
<font face="AR BERKLEY",font size="+2">
Name:
</font>
</td>
<td><input type ="text" name="name"/></td>
</tr>
<tr>
<td>
<font face="AR BERKLEY",font size="+2">
Address
</font>
</td>
<td><input type="text" name="add1" placeholder="Your street/house no./locality"/></td><td><input type="text" name="add2 " placeholder="Your city"/></td>
</tr>
<tr>
<td>
</td>
<td><input type="text" name="add3 " placeholder="Landmark"/></td>
</tr>


<tr>
<td>
<font face="AR BERKLEY",font size="+2">
<?php
if(isset($_POST['Order placed']));
$i=$_POST["c1"];
$q=$_POST["quant"];
?>
Item:
</font>
</td>
<td>
<?php

if(" ")
{
echo $i;

?>
	</br>
	<?php
}

?>
</td>
</tr>

<tr>
<td>
<font face="AR BERKLEY",font size="+2">
Quantity:
</font>
</td>
<td>
<?php

if(" ")
{
echo $q;


	
}
?>

</td>
</tr>

 <!--try-->
 <tr>
<td>
<font face="AR BERKLEY",font size="+2">
  Deliver Time
</font>
  </td>
  <td>
 <select>
<option value=a1 name="o">As soon as possible </option>
<option value=a2 name="o"> after 1 hour</option>
<option value=a3 name="o">after 2 hour </option>
<option value=a4 name="o"> in afternoon</option>
<option value=a5 name="o"> at night</option>
</select>
</td>
 </tr>
 <!--try-->
<tr>
<td>
<font face="AR BERKLEY",font size="+2">
Payment:
</font>
</td>
<td>
<form> <input type="radio" name="p1"><a href="Payment.html"> <font face="Bradley hand itc",font size="+2",font color="blue"><b>
Pay Now </b>
</font> </a>
</td></tr>
<tr>
<td></td>
<td>
 <input type="radio" name="p1"> <font face="Bradley hand itc",font size="+2",font color="blue"><b>
Pay On Delivery  </b></font> </a></td></tr>

</table>
<center>
<input type="submit">
</center>
</form>
</div> 

</center>



</div>
<?php
$con=myql_connect("localhost","root","");
if(!$con)
{
die('could not connect'.mysql_error());
}
mysql_select_db("hotel",$con);
$sql="INSERT INTO oders(oname,street,city,item,quantity,gtime)
	VALUES('$_POST[name]','$_POST[add1]','$_POST[add2]','$_POST[c1]','$_POST[quant]','$_POST[o]')";
if(!mysql_query($sql,$con))
{

die('Error:'.mysl_error());}

mysql_close($con)
	?>
</body>
</html>



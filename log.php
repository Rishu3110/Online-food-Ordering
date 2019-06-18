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
<center>
<form action="adde.php" method="post" >

Employee id:<input type ="text" name="d1"/><br>
Employee name:<input type="text" name="d2"/><br>
Employee designation:<input type ="text" name="d3"/><br>
DOJ:<input type="date" name="d4"/><br>
Salary:<input type="text" name="d5"/><br>
<input name="s" type="submit">


</form>
</center>
</div>

</body>
</html>
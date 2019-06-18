
<?php
	if(isset($_POST["s1"]))
	{
	 $n=$_POST['c1'];
	 $c=$_POST['quant'];
	
		
		$con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db( $con,"hotel");
		$sql="insert into oders(item,quantity) values('$n','$c')";
		mysqli_query($con,$sql);
		if(mysqli_affected_rows($con)>0)
			 echo "<h1>order placed Successfully</h1>";
			 
		else
			echo "<h1>Record Not Inserted<h1>";		
	}
	?>
		<a href="indexo.php"><input name="b" type="button" value="go to homepage"/>

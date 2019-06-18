
<?php
	if(isset($_POST["s"]))
	{
	 $n=$_POST['d1'];
	 $c=$_POST['d2'];
	 $e=$_POST['d3'];
	  
	 $l=$_POST['d4'];
	  $m=$_POST['d5'];
	
		
		$con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db( $con,"hotel");
		$sql="insert into chef values('$c','$n','$l','$m','$e')";
		mysqli_query($con,$sql);
		if(mysqli_affected_rows($con)>0)
			 echo "<h1>Record Inserted Successfully</h1>";
			 
		else
			echo "<h1>Record Not Inserted<h1>";		
	}
	?>
		<a href="ordertry.php"><input name="b" type="button" value="go to homepage"/>

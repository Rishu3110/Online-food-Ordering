

<?php
	if(isset($_POST["s"]))
	{
	 $n=$_POST['f1'];
	 $c=$_POST['l1'];
	 $e=$_POST['e1'];
	  
	 $l=$_POST['p1'];
	  $m=$_POST['a1'];
	 $q=$_POST['g1'];
	  $p=$_POST['d1'];
		
		$con=mysqli_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}
		mysqli_select_db( $con,"hotel");
		$sql="insert into dbusers values('$n','$c','$e','$l','$m','$q','$p')";
		mysqli_query($con,$sql);
		if(mysqli_affected_rows($con)>0)
			 echo "<h1>Record Inserted Successfully</h1>";
			 
		else
			echo "<h1>Record Not Inserted<h1>";		
	}
	?>



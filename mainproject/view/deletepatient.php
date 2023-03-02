<!DOCTYPE html>
<html>
<head>
	
	<title>delete data</title>
	
    <link rel="stylesheet" type="text/css" href="css/design.css">



    

</head>
<body>
	<?php
        include '../view/header1.php';
        include '../view/header2.php';
        ?>
	<center>
		
		<h1>Delete Patient</h1>
		<form action="" method="post">

			<input type="text" name="patientid" place holder="enter patient's serial no:">
			<input type="submit" name="delete" value="Delete">
		</form>

	</center>

</body>

<?php
	$connect = mysqli_connect("localhost", "root", "", "mainproject");

	if (isset($_post['delete']))
	{
		$patientid=$_post['patientid'];

		$query = "DELETE FROM `patientlist` WHERE `patientid`=$patientid ";
		$query_run= mysqli_query($connection,$query);
		if($query_run)
		{
			echo'<script type="text/javascript"> alert("data deleted") </script>';
		}
		
		else
		{
			echo'<script type="text/javascript"> alert("data not deleted") </script>';
		}
	}	
?>
</html>
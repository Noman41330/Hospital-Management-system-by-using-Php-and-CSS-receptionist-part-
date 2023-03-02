<?php
$connect = mysqli_connect("localhost", "root", "", "mainproject");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM patientlist
	WHERE firstname LIKE '%".$search."%'
	OR lastname LIKE '%".$search."%' 
	OR nid LIKE '%".$search."%' 
	OR mobileno LIKE '%".$search."%' 
	OR roomnumber LIKE '%".$search."%'
	OR due LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM patientlist ORDER BY patientid";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered print">
						<tr>
							<th>Patient First  Name</th>
							<th>Patient Last  Name</th>
							<th>NID or BCN</th>
							<th>Phone no.</th>
							<th>Room no.</th>
							<th>Due Amount</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["firstname"].'</td>
				<td>'.$row["lastname"].'</td>
				<td>'.$row["nid"].'</td>
				<td>'.$row["mobileno"].'</td>
				<td>'.$row["roomnumber"].'</td>
				<td>'.$row["due"].'</td>

			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
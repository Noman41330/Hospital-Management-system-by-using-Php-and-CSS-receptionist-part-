<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Ajax </title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
		
	</head>
	<head><link rel="stylesheet" type="text/css" href="css/design.css"></head>
	<body>
		<center>
		<img src="../control/1.jpeg" class="center" alt="lab one img" style="width:100" >
		<h1>LAB ONE MEDICAL SERVICES AND HOSPITAL </h1>
	</center>
		<div class="container">
			<button><a href="home.php"><-Back</a></button>
			 

			<br />
			<br />
			<br />
			<h2 align="center">Search Patient</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Patient Details" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
		<div>
			 <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
		</div>
		<?php
        include '../view/footer.php';
        
        ?>

	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"../control/get.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>



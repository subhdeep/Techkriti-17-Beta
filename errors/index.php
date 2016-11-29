<!DOCTYPE html>
<html>
<head>
	<title>404 not found</title>
	<style type="text/css">
	body{
		background-color: #f1f1f1;
		margin: 0;
		font-family: Arial,Courier New;
		color: #222;
		padding:20px;
		overflow: hidden;
	}
	*,*:after,*:before{
		box-sizing:border-box;
	}
	body,html,.x{
		height: 100%;
		width: 100%;
		text-align: center;
	}
	.x{
		display: flex;
		justify-content:center;
		align-items:center;
		flex-direction:column;
	}
	.back{
		position: relative;
		color: #fff;
		background-color: #0089FF;
		padding:8px 20px;
		border-radius: 3px;
		margin: 10px;
	}
	a{
		text-decoration: none;
		color: #0089ff;
	}
	.fix{
		position: fixed;
		bottom: 20px;
		right: 20px;
	}
	</style>
</head>
<body>
	<div class="x">
		<div style="font-weight:bold">
			Somewhere something incredible is waiting to be known.
		</div>
		<a href="http://www.techkriti.org" class="back">
			Explore more
		</a>
	</div>
	<div class="fix">
		If you think this is a serious issue, contact <a href="mailto:saharan@techkriti.org">me</a>.
	</div>
	<script type="text/javascript" src="http://2016.techkriti.org/addcount/x.php?pageid=17"></script>
	<?php
		$servername = "localhost";
		$username = "saharan";
		$password = "yobitch@saharan.com";
		$dbname = "count";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die();
		} 
		$actual_link = mysqli_real_escape_string($conn,"http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
		$sql = "INSERT INTO `count`.`errors` (`id`,`page`) VALUES (NULL,'$actual_link')";

		if ($conn->query($sql) === TRUE) {
		    // echo "New record created successfully";
		} else {
		    // echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	?>

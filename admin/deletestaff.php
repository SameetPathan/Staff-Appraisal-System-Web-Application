<?php
include('adminnavbar.php');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="../css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="#" method="post">
				<h2>Delete Staff</h2>
                <div class="form-row">
					<label for="staffid">Staff ID</label>
					<input type="text" name="staffid" id="staffid" class="input-text" placeholder="Staff ID" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
                <label for="staffname">Staff Name</label>
					<input type="text" name="staffname" id="staffname" class="input-text" placeholder="Staff Name" required>
					<i class="fas fa-user"></i>
				</div>
                
				
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Delete">
				</div>
                <div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
			</form>
		</div>
	</div>
</body>
</html>
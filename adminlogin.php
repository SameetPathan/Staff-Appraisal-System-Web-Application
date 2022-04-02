<?php
include('navbar.php');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="./admin/adminhome.php" method="post">
				<h2>Login</h2>
                <div class="form-row">
					<label for="username">Username</label>
					<input type="text" name="username" id="usename" class="input-text" placeholder="Username" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Password" required>
					<i class="fas fa-lock"></i>
				</div>
                
				
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Login">
				</div>
			</form>
		</div>
	</div>
</body>
</html>
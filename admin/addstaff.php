<?php
include('adminnavbar.php');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Staff Registration</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="#" method="post">
				<h2>Register Here</h2>
                <div class="form-row">
					<label for="id">ID</label>
					<input type="text" name="staffid" id="staffid" class="input-text" placeholder="Your ID" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="full-name">Full Name</label>
					<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Name" required>
					<i class="fas fa-user"></i>
				</div>
                <div class="form-row">
					<label for="Mobile No">Mobile Number</label>
					<input type="text" name="mobile" id="mobileno" class="input-text" placeholder="Mobile Number" required>
					<i class="fas fa-phone"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Your Email</label>
					<input type="text" name="your-email" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="address">Address</label>
					<input type="text" name="address" id="address" class="input-text" placeholder="Your Address" required>
					<i class="fas fa-home"></i>
				</div>
                
                <div class="form-row">
					<label for="Gender">Gender</label>
                    <select>        
					<option name="female" class="input" id="female"  required>Female</option>
                    <option name="male" id="female" class="input"  required>Male</option>
                    </select>
					
				</div>
                <br>    
                <div class="form-row">
					<label for="Qualifiication">Qualification</label>
					<input type="text" name="qualification" id="qualification" class="input-text" placeholder="Your Qualification" required>
					<i class="fas fa-book"></i>
				</div>
                <div class="form-row">
					<label for="Role">Role</label>
					<input type="text" name="role" id="role" class="input-text" placeholder="Your Role" required>
					<i class="fas fa-user"></i>
				</div>
                <div class="form-row">
					<label for="Experience">Experience</label>
					<input type="text" name="experience" id="experience" class="input-text" placeholder="Your Experience" required>
					<i class="fas fa-user"></i>
				</div>
                <div class="form-row">
					<label for="Date">Date of Joining</label>
					<input type="date" name="ofjoining" id="dateofjoining" class="input-text" required>
					
				</div>
                <div class="form-row">
					<label for="Salary">Salary</label>
					<input type="text" name="salary" id="salary" class="input-text" placeholder="Your Salary" required>
					<i class="fas fa-circle-dollar-to-slot"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Add Staff Details">
				</div>
			</form>
		</div>
	</div>
</body>
</html>
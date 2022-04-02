<?php
include('navbar.php');
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
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://kit.fontawesome.com/3fcf05d849.js" crossorigin="anonymous"></script>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="#" method="post">
				<h2>My Performance</h2>
                <div class="form-row">
					<label for="noofsub">Number of Subjects Taught</label>
					<input type="text" name="noofsub" id="noofsub" class="input-text" placeholder="Number of subjects taught" required>
					
				</div>
				
                <div class="form-row">
					<label for="nooftargetlectures">Number of Target Lectures</label>
					<input type="text" name="nooftargetlectures" id="nooftargetlectures" class="input-text" placeholder="Number of Target Lectures" required>
					
				</div>
				<div class="form-row">
					<label for="lectures">Lectures Actually Engaged</label>
					<input type="text" name="lectures" id="lectures" class="input-text" placeholder="Lectures Actually Engaged" required>
					
				</div>
				<div class="form-row">
					<label for="percentage">Percentage Target Acheived</label>
					<input type="text" name="percentage" id="percentage" class="input-text" placeholder="Percentage Target Acheived" required>
					
                <br>    
                <div class="form-row">
					<label for="performance">Performance and Multiplying Factors</label>
					<input type="text" name="performance" id="performance" class="input-text" placeholder="Performance and Multiplying Factors" required>
					
				</div>
                <div class="form-row">
					<label for="maxweight">Max Weight</label>
					<input type="text" name="maxweight" id="maxweight" class="input-text" placeholder="Max Weight" required>
					
				</div>
                <div class="form-row">
					<label for="weightachieved">Weight Acheived</label>
					<input type="text" name="weightachieved" id="weightachieved" class="input-text" placeholder="Weight Acheived" required>
					
				</div>
                
            
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Submit">
				</div>
			</form>
		</div>
	</div>
</body>
</html>
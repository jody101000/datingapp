<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration System</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>

	<div class="header">
		<h2>Student Registration</h2>
	</div>

	

	<form method="post" action="stu_register.php">
	<div class="row">
  	<div class="column">	
	<!-- <?php include('errors.php') ?> -->
		<div class="input-group">
			<label>Case ID*</label><br>
			<input type="text" name="case_id" required placeholder="This field is required">
		</div>

		<div class="input-group">
			<label>Name</label><br>
			<input type="text" name="name">
		</div>

		<div class="input-group">
			<label>Address</label><br>
			<input type="text" name="address">
		</div>

        <div class="input-group">
			<label>Phone Number</label><br>
			<input type="tel" name="phone_num" placeholder="1234567890" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" >
		</div>

        <div class="input-group">
			<label>Email</label><br>
			<input type="email" name="email">
		</div>

        <div class="input-group">
			<label>Age</label><br>
			<input type="number" name="age">
		</div>

        <div class="input-group">
			<label>Gender</label><br>
			<input type="text" name="gender">
		</div>

        <div class="input-group">
			<label>Sexual Orientation</label><br>
			<input type="text" name="sexual_ori">
		</div>

        <div class="input-group">
			<label>Height</label><br>
			<input type="text" name="height">
		</div>

        <div class="input-group">
			<label>Race</label><br>
			<input type="text" name="race">
		</div>

        <!-- select?  -->
        <div class="input-group">
			<label>Country</label><br>
			<input type="text" name="country">
		</div>

		</div>
  		<div class="column">
		<div><b>Preference</b></div>
		<div class="input-group"> 
            <label>Alcohol</label>
            <select name="alcohol" id="alcohol">
            <option value="2">SELECT</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
            </select>
		</div>
		<div class="input-group"> 
				<label>Smoke</label>
				<select name="smoke" id="smoke">
				<option value="2">SELECT</option>
				<option value="1">Yes</option>
				<option value="0">No</option>
				</select>
		</div>
        <div class="input-group"> 
            <label>Has pet</label>
        <select name="has_pets" id="has_pets">
            <option value="2">SELECT</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
            </select>
        </div>
        <div class="input-group">
            <label>Music preference</label><br>
            <input type="text" name="music_preference">
        </div>
        <div class="input-group">
            <label>Exercise frequency</label><br>
            <input placeholder="times per week" type="number" name="exercise_frequency">
        </div>
        <div class="input-group">
            <label>Major</label><br>
            <input type="text" name="pre_major">
        </div>
        <div class="input-group">
            <label>Race</label><br>
            <input type="text" name="pre_race">
        </div>
        <div class="input-group">
            <label>Height</label><br>
            <input type="text" name="pre_height">
        </div>
        <div class="input-group">
            <label>Age</label><br>
            <input type="number" name="pre_age">
        </div>
        <div class="input-group">
            <label>Country</label><br>
            <input type="text" name="pre_country">
        </div>

		</div>
  		<div class="column">
        <div><b>Education Information</b></div>
		<div class="input-group">
			<label>Graduation year</label><br>
			<input type="text" name="grad_yr">
		</div>

		<div class="input-group">
			<label>Major</label><br>
			<input type="text" name="major">
		</div>

		<br>
		<button type="submit" class="btn" name="reg_student">
			
				Register
			
		</button>
		</div>
		
</div>

		
	</form>
</body>
</html>
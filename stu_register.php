<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration System</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="stu_register.php">
		<!-- <?php include('errors.php') ?> -->
		<div class="input-group">
			<label>Case ID</label>
			<input type="text" name="case_id" required>
		</div>

		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name">
		</div>

		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address">
		</div>

        <div class="input-group">
			<label>Phone Number</label>
			<input type="tel" name="phone_num" placeholder="1234567890" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" >
		</div>

        <div class="input-group">
			<label>Email</label>
			<input type="email" name="email">
		</div>

        <div class="input-group">
			<label>Age</label>
			<input type="number" name="age">
		</div>

        <div class="input-group">
			<label>Gender</label>
			<input type="text" name="gender">
		</div>

        <div class="input-group">
			<label>Sexual Orientation</label>
			<input type="text" name="sexual_ori">
		</div>

        <div class="input-group">
			<label>Height</label>
			<input type="text" name="height">
		</div>

        <div class="input-group">
			<label>Race</label>
			<input type="text" name="race">
		</div>

        <!-- select?  -->
        <div class="input-group">
			<label>Country</label>
			<input type="text" name="country">
		</div>


        <div><p>Education Information</p></div>
		<div class="input-group">
			<label>Graduation year</label>
			<input type="text" name="grad_yr">
		</div>

		<div class="input-group">
			<label>Major</label>
			<input type="text" name="major">
		</div>

		<div><p>Preference</p></div>
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
            <label>Music preference</label>
            <input type="text" name="music_preference">
        </div>
        <div class="input-group">
            <label>Exercise frequency (per week)</label>
            <input type="number" name="exercise_frequency">
        </div>
        <div class="input-group">
            <label>Major</label>
            <input type="text" name="pre_major">
        </div>
        <div class="input-group">
            <label>Race</label>
            <input type="text" name="pre_race">
        </div>
        <div class="input-group">
            <label>Height</label>
            <input type="text" name="pre_height">
        </div>
        <div class="input-group">
            <label>Age</label>
            <input type="number" name="pre_age">
        </div>
        <div class="input-group">
            <label>Country</label>
            <input type="text" name="pre_country">
        </div>

		
		<button type="submit" class="btn" name="reg_student">
			<a href="select.php">Register</a>
		</button>
		
	</form>
</body>
</html>
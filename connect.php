<?php 

$sName = "localhost";
$uName = "root";
$pass = "KGM6356*2k";
$db_name = "dating";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}
 

//??
session_start();

$errors   = array();

$db = mysqli_connect($sName, $uName, $pass, $db_name);

if (isset($_POST['reg_student'])) {

	$case_id   = mysqli_real_escape_string($db, $_POST['case_id']);
	$name	    = mysqli_real_escape_string($db, $_POST['name']);
	$address = mysqli_real_escape_string($db, $_POST['address']);
  $phone_num = mysqli_real_escape_string($db, $_POST['phone_num']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $sexual_ori = mysqli_real_escape_string($db, $_POST['sexual_ori']);
  $height = mysqli_real_escape_string($db, $_POST['height']);
  $race = mysqli_real_escape_string($db, $_POST['race']);
  $country = mysqli_real_escape_string($db, $_POST['country']);

  $grad_yr = mysqli_real_escape_string($db, $_POST['country']);
  $major = mysqli_real_escape_string($db, $_POST['major']);

  $smoke = mysqli_real_escape_string($db, $_POST['smoke']);
  $alcohol = mysqli_real_escape_string($db, $_POST['alcohol']);
  $music_preference = mysqli_real_escape_string($db, $_POST['music_preference']);
  $exercise_frequency = mysqli_real_escape_string($db, $_POST['exercise_frequency']);
  $has_pets = mysqli_real_escape_string($db, $_POST['has_pets']);
  $pre_major = mysqli_real_escape_string($db, $_POST['pre_major']);
  $pre_race = mysqli_real_escape_string($db, $_POST['pre_race']);
  $pre_height = mysqli_real_escape_string($db, $_POST['pre_height']);
  $pre_age= mysqli_real_escape_string($db, $_POST['pre_age']);
  $pre_country = mysqli_real_escape_string($db, $_POST['pre_country']);

	// checking filled
	if (empty($case_id)) { 
    echo ("-Case id is required"); 
  }

	$user_check_query = "SELECT * FROM User WHERE case_id='$case_id'";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	// Checking user in database
	if ($user) {
		if ($user['case_id'] === $case_id) {
			// array_push($errors, "User already exists");
      echo ("User already exists");
		}
	}

	echo "Total error: " . count($errors);

  

	// Insert New Data
	if (count($errors) == 0) {
    $age = (int)$age;
    $pre_age = (int)$pre_age;
    $smoke = (int)$smoke;
    $alcohol = (int)$alcohol;
    $exercise_frequency = (int)$exercise_frequency;
		$query = "INSERT INTO User (case_id,name, address,phone_number,email,age,gender, sexual_orientation,height,race,country) VALUES ('$case_id', '$name', '$address','$phone_num','$email',$age,'$gender','$sexual_ori','$height','$race','$country')";
		mysqli_query($db, $query);
    $grad_yr = (int)$grad_yr;
    $query = "INSERT INTO Student (graduate_yr, major, case_id) VALUES ($grad_yr, '$major', '$case_id')";
		mysqli_query($db, $query);
    $query = "INSERT INTO Preference (case_id, smoke, alcohol, music_preference, exercise_frequency, has_pets, major, race, height, age, country) VALUES ('$case_id', $smoke, $alcohol, '$music_preference', $exercise_frequency, '$has_pets', '$pre_major', '$pre_race', '$pre_height', $pre_age, '$pre_country')";
    mysqli_query($db, $query);
		$_SESSION['name'] = $name;
		$_SESSION['success']  = "You're now added to our database";
		header('location: index.php');
	}

}
if (isset($_POST['reg_staff'])) {

	$case_id   = mysqli_real_escape_string($db, $_POST['case_id']);
	$name	    = mysqli_real_escape_string($db, $_POST['name']);
	$address = mysqli_real_escape_string($db, $_POST['address']);
  $phone_num = mysqli_real_escape_string($db, $_POST['phone_num']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $sexual_ori = mysqli_real_escape_string($db, $_POST['sexual_ori']);
  $height = mysqli_real_escape_string($db, $_POST['height']);
  $race = mysqli_real_escape_string($db, $_POST['race']);
  $country = mysqli_real_escape_string($db, $_POST['country']);

  $title = mysqli_real_escape_string($db, $_POST['title']);
  $department = mysqli_real_escape_string($db, $_POST['department']);
	
  $m_id = mysqli_real_escape_string($db, $_POST['m_id']);
  $div_num = mysqli_real_escape_string($db, $_POST['div_num']);
	$child_num = mysqli_real_escape_string($db, $_POST['child_num']);
  
  $p_id = mysqli_real_escape_string($db, $_POST['p_id']);
	$salary = mysqli_real_escape_string($db, $_POST['salary']);
	$car_num = mysqli_real_escape_string($db, $_POST['car_num']);
	$house_num = mysqli_real_escape_string($db, $_POST['house_num']);
  
  $smoke = mysqli_real_escape_string($db, $_POST['smoke']);
  $alcohol = mysqli_real_escape_string($db, $_POST['alcohol']);
  $music_preference = mysqli_real_escape_string($db, $_POST['music_preference']);
  $exercise_frequency = mysqli_real_escape_string($db, $_POST['exercise_frequency']);
  $has_pets = mysqli_real_escape_string($db, $_POST['has_pets']);
  $pre_major = mysqli_real_escape_string($db, $_POST['pre_major']);
  $pre_race = mysqli_real_escape_string($db, $_POST['pre_race']);
  $pre_height = mysqli_real_escape_string($db, $_POST['pre_height']);
  $pre_age= mysqli_real_escape_string($db, $_POST['pre_age']);
  $pre_country = mysqli_real_escape_string($db, $_POST['pre_country']);


  // checking filled
	if (empty($case_id)) { 
    echo ("-Case id is required"); 
  }

	$user_check_query = "SELECT * FROM User WHERE case_id='$case_id'";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	// Checking user in database
	if ($user) {
		if ($user['case_id'] === $case_id) {
			array_push($errors, "User already exists");
      echo ("User already exists");
		}
	}

	// echo "Total error: " . count($errors);

	// Insert New Data
	if (count($errors) == 0) {
    $age = (int)$age;
    $pre_age = (int)$pre_age;
    $smoke = (int)$smoke;
    $alcohol = (int)$alcohol;
    $exercise_frequency = (int)$exercise_frequency;
    $child_num = (int)$child_num;
    $salary = (int)$salary;
    $car_num = (int)$car_num;
    $house_num = (int)$house_num;
		$query = "INSERT INTO User (case_id,name, address,phone_number,email,age,gender, sexual_orientation,height,race,country) VALUES ('$case_id', '$name', '$address','$phone_num','$email',$age,'$gender','$sexual_ori','$height','$race','$country')";
		mysqli_query($db, $query);
  	$query = "INSERT INTO Staff_Faculty (title, department, case_id) VALUES ('$title', '$department', '$case_id')";
		mysqli_query($db, $query);
    $query = "INSERT INTO Marital_history (divorce_number, children_number, case_id) VALUES ('$div_num', '$child_num', '$case_id')";
		mysqli_query($db, $query);
    $query = "INSERT INTO Property (salary, car_number, house_number,case_id) VALUES ('$salary', '$car_num', '$house_num', '$case_id')";
		mysqli_query($db, $query);
    $query = "INSERT INTO Preference (case_id, smoke, alcohol, music_preference, exercise_frequency, has_pets, major, race, height, age, country) VALUES ('$case_id' ,$smoke, $alcohol, '$music_preference', $exercise_frequency, '$has_pets', '$pre_major', '$pre_race', '$pre_height', $pre_age, '$pre_country')";
    mysqli_query($db, $query);
		// $_SESSION['name'] = $name;
		// $_SESSION['success']  = "You're now added to our database";
		header('location: index.php');
	}

}


?>
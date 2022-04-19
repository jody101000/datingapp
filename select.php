<?php 
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dating App</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="header">
		<h2>I want to find...</h2>
	</div>
        <form action="find.php" method="post">

         
            <div class="input-group">
                <label>Minimum age</label><br>             
                <input type="text" name="minage" required placeholder="Min age is required">
            </div>
            <div class="input-group">
                <label>Maximum age</label><br>             
                <input type="text" name="maxage">    
            </div>

            <div><p></p></div>
            <div class="input-group">
                <label>Gender</label><br>             
                <input type="text" name="gender">   
            </div>

            <div class="input-group">
                <label>Race</label><br>               
                <input type="text" name="race">   
            </div>

            <br>
            <button type="submit" class="btn">Submit</button>
        </form>
    
</body>
</html>
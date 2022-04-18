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
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
</head>

<body>

        
        <form action="find.php" method="post">

            <div><p>Age</p></div>
            <div class="input-group mb-3 search">
                <label>Minimum age</label>               
                <input type="text" name="minage" required placeholder="Min age is required">
                <label>Maximum age</label>               
                <input type="text" name="maxage">    
            </div>

            <div><p>Gender</p></div>
            <div class="input-group mb-3 search">             
                <input type="text" name="gender">   
            </div>

            <div><p>Race</p></div>
            <div class="input-group mb-3 search">             
                <input type="text" name="race">   
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>
    
</body>
</html>
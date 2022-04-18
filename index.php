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

<div>
    <button><a href="./stu_register.php">Student</a></button>
    <button><a href="./stf_register.php">Staff/Faculty</a></button>
</div>
    
</body>
</html>
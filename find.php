<?php 
require 'connect.php';
?>
<!DOCTYPE html>
<html>
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

   
        <?php
        $minage = $_POST['minage'];
        $maxage = $_POST['maxage'];
        $gender = $_POST['gender'];
        $race = $_POST['race'];

        $and = false;
        // echo $age;
        $sql = "SELECT * FROM `User` WHERE";
        if ($minage != ''){
           $sql.= " `age`>='$minage' ";
           $and = true;
        }
        if ($maxage != ''){
            $sql.= "and `age`<'$maxage' ";
        }
        if ($gender != ''){
            $sql.= "and `gender`='$gender' ";
        }
        if ($race != ''){
            $sql.= "and `race`='$race' ";
        }
        
        $users = $conn->query($sql);
        
        ?>

<table>
            <td><b>Case ID</b></td>
                    <td><b>Name</b></td>
                    <td><b>Address</b></td>
                    <td><b>Age</b></td>
                    <td><b>Gender</b></td>
                    <td><b>Sexual Orientation</b></td>
                    <td><b>Height</b></td>
                    <td><b>Race</b></td>
                    <td><b>Country</b></td>
            <?php while($user = $users->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $user["case_id"]?></td>
                <td><?php echo $user["name"] ?></td>
                <td><?php echo $user["address"] ?></td>
                <td><?php echo $user["age"]?></td>
                <td><?php echo $user["gender"] ?></td>
                <td><?php echo $user["sexual_orientation"] ?></td>
                <td><?php echo $user["height"]?></td>
                <td><?php echo $user["race"] ?></td>
                <td><?php echo $user["country"] ?></td>
            </tr>
        <?php }?>
    </table>

    </body>
</html>
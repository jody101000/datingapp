<?php
          include_once '../connect.php';
          include_once './Model/User.php';

          $age = explode(',', $_GET['age']) ;

          $sql = "SELECT * FROM `User` WHERE ";

          $sql = "SELECT * FROM `User` WHERE `age` = '$age' ";

          $res = mysqli_query($db, $sql);
          $data_arr = array();
          while($row = mysqli_fetch_array($res)){
            $user = new User($row['case_id'], $row['name'], $row['address'], $row['phone_number'], $row['email'], $row['age'], $row['gender'],$row['age'], $row['gender'], $row['sexual_orientation'],$row['height'], $row['race'], $row['country']);
            array_push($data_arr, $user);
          }

          echo json_encode(array('statue'=>1, 'data'=>$data_arr));
?>


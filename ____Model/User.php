<?php
          class User{
                   var $case_id;
                   var $name;
                   var $address;
                   var $phoneNumber;
                   var $email;
                   var $age;
                   var $gender;
                   var $sexual_ori;
                   var $height;
                   var $race;
                   var $country;

                   function __construct($cid, $case_id, $name, $address, $phoneNumber, $email, $age, $gender, $sexual_ori
                   ,$height,$race,$country){
                             $this->cid = $cid;
                             $this->case_id = $case_id;
                             $this->anme = $name;
                             $this->address = $address;
                             $this->phoneNumber = $phoneNumber;
                             $this->email = $email;
                             $this->age = $age;
                             $this->gender = $gender;
                             $this->sexual_ori = $sexual_ori;
                             $this->height = $height;
                             $this->race = $race;
                             $this->country = $country;
                   }
          }
?>
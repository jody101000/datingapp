<?php
          class Pet{
                    var $id;
                    var $name;
                    var $type;
                    var $color;
                    var $age;
                    var $sex;
                    var $owner;
                    var $phone;
                    var $detail;
                    var $img_url;

                    function __construct($id, $name, $type, $color, $age, $sex, $owner, $phone, $detail, $img_url){
                              $this->id = $id;
                              $this->name = $name;
                              $this->type = $type;
                              $this->color = $color;
                              $this->age = $age;
                              $this->sex = $sex;
                              $this->owner = $owner;
                              $this->phone = $phone;
                              $this->detail = $detail;
                              $this->img_url = $img_url;
                    }
          }
?>
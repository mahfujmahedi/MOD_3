<?php


function generatePassword($length) {

    $combination = "!@#$%^&*()_+dhSfD242vSdGjGVS244DGFVG424dbfd2424jh2145121";
    $shuffle = str_shuffle($combination);
    $password = substr($shuffle,0,$length);
    echo $password;    

}

generatePassword(12);

?>
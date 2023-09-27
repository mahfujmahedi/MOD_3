<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];

function RemoveEvenNumbers($numbers) {

    for($x=0; $x<=9; $x++) {

        if ( $numbers[$x]%2 == 0 ) {
            unset($numbers[$x]);
            continue;
        }
    
        echo $numbers[$x].PHP_EOL;
    }
}

RemoveEvenNumbers($numbers);

?>
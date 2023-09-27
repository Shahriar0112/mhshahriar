<?php
 /* First method to create array. */
 $numbers = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

 function num(){
    global $numbers;
    foreach($numbers as $value ) {  
       if($value%2==0){
        echo "$value <br>";
       }
    } 
}
 num();
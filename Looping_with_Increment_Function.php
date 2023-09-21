<?php
function printEvenNum(){
  // for loop to print function
  for ($x > 1; $x <= 20; $x+=2) {
      echo "$x ";
    }
}
printEvenNum();

function printEvenNumDW(){
  // for do While to print function
  $x > 1;
  do {
    echo "$x ";
    $x+=2;
  } while ($x <= 20);
}
printEvenNumDW();
?>

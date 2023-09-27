<?php
$grades = array(85, 92, 78, 88, 95);
rsort($grades);
  
$arrlength = count($grades);
for($x = 0; $x < $arrlength; $x++) {
    echo $grades[$x];
    echo "<br>";
}
?>
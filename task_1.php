<?php
$text="The quick brown fox jumps over the lazy dog";

//Convert the string to all lowercase
$modified_text= strtolower("$text");

//Replace "brown" with "red" in the string.
echo str_replace("brown","red","$modified_text");
?>
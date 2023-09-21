<?php  
$num = 10;  


function series($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){  
return 1;  
}  else {  
return (series($num-1) + series($num-2));  
}   
}  
for ($i = 0; $i < $num; $i++){  
echo series($i);  
echo "\n";  
}  
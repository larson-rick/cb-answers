<?php 

function FirstFactorial($num) {  
  $total = 0;
  if($num == 1) {
    //factorial can't be brought any lower
    return 1;
  }
  else {
    //level of recursion of current number
    //multiplied by factorial of number one less
    return $num * FirstFactorial($num-1);
  }
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo FirstFactorial(fgets(fopen('php://stdin', 'r')));  

?> 

<?php 
  //Challenge #5 of coderbyte.com using PHP
  //Using the PHP language, have the function SimpleAdding(num) add up all the numbers from 1 to num. 
  //For the test cases, the parameter num will be any number from 1 to 1000. 
function SimpleAdding($num) {  

  //if number is greater than 1
  if($num > 1) {
    $total = $num + SimpleAdding($num-1);
  }
  //if number is equal to one
  else {
    $total = $total + 1;
  }
  
  return $total; 
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo SimpleAdding(fgets(fopen('php://stdin', 'r')));  

?> 

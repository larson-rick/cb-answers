<?php 
  //Have the function TimeConvert(num) take the num parameter being passed and return the number of hours and minutes the parameter
  //converts to (ie. if num = 63 then the output should be 1:3). Separate the number of hours and minutes with a colon. 

function TimeConvert($num) {  
  $hours = round($num/60,0);
  $minutes = $num % 60;
  // code goes here
  return $hours . ':' . $minutes; 
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo TimeConvert(fgets(fopen('php://stdin', 'r')));  

?>           

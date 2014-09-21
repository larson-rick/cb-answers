<?php 

*/--------------------------------------------------------

CHALLENGE 1

Have the function FirstReverse(str) take the str parameter being passed and return the string in reversed order


--------------------------------------------------------*/

//function for reversing a string
function FirstReverse($str) {  

  //string for storing answer
  $answer_string = "";
  //count for how much of length to take off 
  $count = 1;
  
  //while string is not empty
  while($new_string != "") {
    //getting last character off of string
    $compare_string = substr($str,strlen($str)-$count,1);
    //add character to answer string
    $answer_string .= $compare_string;
    //incrementing count
    $count++;
    
  }
  
  return $answer_string;
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo FirstReverse(fgets(fopen('php://stdin', 'r')));  

?> 

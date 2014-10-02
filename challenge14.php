<?php 

  //Coderbyte.com Challenge 14
  //Using the PHP language, have the function ExOh(str) take the str parameter being passed and return the string true if there is an equal number of x's and o's, otherwise return the string false. Only these two letters will be entered in the string, no punctuation or numbers. 
  //For example: if str is "xooxxxxooxo" then the output should return false because there are 6 x's and 5 o's.
function ExOh($str) {  
  $x_count = 0;
  $o_count = 0;
  
  for($count = 0;$count <= strlen($str)-1;$count++) {
    $character = substr($str,$count,1);
    if($character == 'x') {
      $x_count++;
    }
    else {
      $o_count++;
    }
  }
  
  if($x_count == $o_count) {
    return 'true';
  }
  else {
    return 'false';
  }
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo ExOh(fgets(fopen('php://stdin', 'r')));  

?>           
 

<?php 

//Coderbyte.com Challenge 11
//Have the function ABCheck(str) take the str parameter being passed and return the string true if the characters a and b are separated by exactly 3 places anywhere in the string at least once
//(ie. "lane borrowed" would result in true because there is exactly three characters between a and b).
//Otherwise return the string false. 

function ABCheck($str) {  
  $a_location = 0;
  $b_location = 0;
  $character_count = 0;
  for($count = 0; $count <= strlen($str)-1; $count++) {
    $character = substr($str,$count,1);
    if(ctype_alpha($character)) {
       if($character == 'a') {
        $a_location = $character_count;
       }
      elseif($character == 'b') {
        $b_location = $character_count;
        $difference = $b_location - $a_location;
        if($difference == '3') {
          return 'true';
         }
      }
    $character_count++;
    }
    else {
      //not character don't increase count
    }
  }
  return 'false';
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo ABCheck(fgets(fopen('php://stdin', 'r')));  

?>     

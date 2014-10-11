<?php 
//Challenge15 coderbyte.com
//Have the function Palindrome(str) take the str parameter being passed and return the string true if the parameter is a palindrome, (the string is the same forward as it is backward) otherwise return the string false. 
//For example: "racecar" is also "racecar" backwards. Punctuation and numbers will not be part of the string. 

function Palindrome($str) {  
  $reverse_character_string = "";
  $character_string = "";
  
  //building character string
  for($count = 0;$count <= strlen($str)-1;$count++) {
    $character = substr($str,$count,1);
    if($character == ' ' ) {
      //don't add character to string
    }
    else {
      $character_string .= $character;
    }
  }
  
  //building reverse character string
  for($count2 = strlen($str)-1;$count2 >= 0;$count2--) {
    $character2 = substr($str,$count2,1);
    if($character2 == ' ' ) {
      //don't add character to string
    }
    else {
      $reverse_character_string .= $character2;
    }
  }
  
  if($character_string == $reverse_character_string) {
    return 'true';
  }
  else {
    return 'false';
  }
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo Palindrome(fgets(fopen('php://stdin', 'r')));  

?>      

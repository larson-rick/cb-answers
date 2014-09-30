<?php 

//Challenge 12
//Have the function VowelCount(str) take the str string parameter being passed and return the number of vowels the string contains (ie. "All cows eat grass" would return 5). 
//Do not count y as a vowel for this challenge. 

function VowelCount($str) {  
  $vowel_count = 0;
  for($count = 0; $count <= strlen($str)-1;$count++) {
    $character = substr($str,$count,1);
    if($character == 'a' || $character == 'e' || $character == 'i' || $character == 'o' || $character == 'u') {
      $vowel_count++;
    }
  }
  return $vowel_count; 
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo VowelCount(fgets(fopen('php://stdin', 'r')));  

?>           

<?php 

//Challenge 13
//Have the function WordCount(str) take the str string parameter being passed and return the number of words the string contains (ie. "Never eat shredded wheat" would return 4). 
//Words will be separated by single spaces. 

function WordCount($str) {  
  $word_count = 0;
  // code goes here
  for($count = 0; $count <= strlen($str)-1;$count++) {
    $character = substr($str,$count,1);
    if($character == " " || $count == strlen($str)-1) {
      $word_count++;
    }
  }
  return $word_count; 
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo WordCount(fgets(fopen('php://stdin', 'r')));  

?>           

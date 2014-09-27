<?php 
//Have the function LetterCapitalize(str) take the str parameter being passed and capitalize the first letter of each word.
//Words will be separated by only one space. 

function LetterCapitalize($str) {  
  $new_string = "";
  $word = "";
  for($count = 0;$count <= strlen($str)-1;$count++) {
    $char = substr($str,$count,1);
    if($count == strlen($str)-1) {
      $word .= $char;
      //start of last word
      $first_char = strtoupper(substr($word,0,1));
      $last_part = substr($word,1,strlen($word));
      $new_word .= $first_char . $last_part;
      $new_string .= $new_word;
    }
    else {
      if($char == " ") {
      //start of new word
      $first_char = strtoupper(substr($word,0,1));
      $last_part = substr($word,1,strlen($word)-1);
      $new_word .= $first_char . $last_part . " ";
      //$new_string .= $new_word . " ";
      $word = "";
      }
      else {
        $word .= $char;
      }
    }
    // code goes here
  }  
  return $new_string; 
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo LetterCapitalize(fgets(fopen('php://stdin', 'r')));  

?>           

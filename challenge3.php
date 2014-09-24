<?php 
  //Have the function LongestWord(sen) take the sen parameter being passed and return the largest word in the string. If there are two or more words that are the same length, return the first word from the string with that length. Ignore punctuation and assume sen will not be empty. 

  //Use the Parameter Testing feature in the box below to test your code with different arguments.
   //When the input was "this is some sort of sentence" your output was incorrect.
   //When the input was "123456789 98765432" your output was incorrect.
  //When the input was "a confusing /:sentence:/[ this is not!!!!!!!~" your output was incorrect.
  $longest_word = "";
  $word = "";
  $compare_sentence = $sen;
  $current_char = 0; 
 
  // code goes here
  while($current_char <= strlen($sen)-1) {
    $char = substr($sen,$current_char,1);
    if (ctype_alpha($char)) {
      $word .= $char;
      if($current_char == strlen($sen)-1) {
         if(strlen($word) > strlen($longest_word)) {
          $longest_word = $word;
          $word = "";
        }
        elseif(strlen($word) == strlen($longest_word)) {
          //keep first word with same length
        }
        else {
          //don't assign as longest word
        }
      }
      else {
        //not last character in string
      }
    } else {
      // not character
      if($char != " ") {
        //not space still increment count but not word
         
      }
      else {
        if(strlen($word) > strlen($longest_word)) {
          $longest_word = $word;
          $word = "";
        }
        elseif(strlen($word) == strlen($longest_word)) {
          //keep first word with same length
        }
        else {
          //don't assign as longest word
        }
      }
    }
    $current_char++;
}
    return $longest_word;
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo LongestWord(fgets(fopen('php://stdin', 'r')));  

?>           

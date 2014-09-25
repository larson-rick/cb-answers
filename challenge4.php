<?php 

function LetterChanges($str) {  
  $new_string = "";
    // code goes here
    for($char_location = 0;$char_location <= strlen($str);$char_location++) {
      $char = substr($str,$char_location,1);
      if(ctype_alpha($char)) {
       $new_char = ++$char;
       
       if($new_char == 'a' || $new_char == 'e' || $new_char == 'i' || $new_char == 'o' || $new_char == 'u') {
          $upper_new_char = strtoupper($new_char);
          $new_string .= $upper_new_char;
        }
        else {
          $new_string .= $new_char;
        }
      }
      else {
        //don't modify character
        $new_string .= $char;
      }
      
    }
 
    return $new_string; 
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo LetterChanges(fgets(fopen('php://stdin', 'r')));  

?>

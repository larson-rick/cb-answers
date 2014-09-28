<?php 
//Challenge 7
//Using the PHP language, have the function SimpleSymbols(str) take the str parameter being passed and determine if it is an acceptable sequence by either returning the string true or false. The str parameter will be composed of + and = symbols with several letters between them (ie. ++d+===+c++==a) and for the string to be true each letter must be surrounded by a + symbol. 
//So the string to the left would be false. The string will not be empty and will have at least one letter. 
function SimpleSymbols($str) {  
  $previous_char = "";
  for($count = 0;$count<=strlen($str)-1;$count++) {
    $char = substr($str,$count,1);
    if(ctype_alpha($char)) {
      if($previous_char != '+') {
            return 'false';
      }
      else {
       //valid string
      }
    }
    else {
      if($char == '+') {
        
      }
      elseif($char == '=') {
        if($previous_char != "") {
          if(ctype_alpha($previous_char)) {
            return 'false';
          }
          else {
            //valid string
          }
        }
        else {
          //invalid character
          return 'false';
        }
      }
    }
    $previous_char = $char;
  }
  // code goes here
  return 'true'; 
         
}
   
// keep this function call here  
// to see how to enter arguments in PHP scroll down
echo SimpleSymbols(fgets(fopen('php://stdin', 'r')));  

?>           

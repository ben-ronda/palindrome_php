<?php
    class Palindrome
    {
        function palindrome_confirm($input_string) {
            $length = strlen($input_string);
            $letters= str_split($input_string);
            $reverse = array();

            for ($i = $length - 1; $i >= 0 ; --$i) {
                array_push($reverse, $letters[$i]);
            }

            if ($letters == $reverse){
              return "It is a palindrome!";
            }
            else {
              return "It is not a palindrome!";
            }

        }
  }
?>

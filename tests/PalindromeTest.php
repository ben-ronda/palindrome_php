<?php

    require_once "src/Palindrome.php";

    class PalindromeTest extends PHPUnit_Framework_TestCase
    {
        function test_notPalindrome()
        {
            $test_palindrome = new Palindrome;
            $input = "Hello";

            $result = $test_palindrome->palindrome_confirm($input);

            $this->assertEquals("It is not a palindrome!", $result);
        }

        function test_isPalindrome()
        {
            $test_palindrome = new Palindrome;
            $input = "pop";

            $result = $test_palindrome->palindrome_confirm($input);

            $this->assertEquals("It is a palindrome!", $result);
        }
    }

?>

<?php

class StringHelperTest extends \PHPUnit\Framework\TestCase {

    /** @test */
    public function reverse_string_return_string_with_the_right_value()
    {
        $str_helper = new \App\Helpers\StringHelper;

        $str = "halo";
        $rstr = $str_helper->reverseString($str);
        $expected_result = "olah";
        
        $this->assertIsString($rstr);
        $this->assertEquals($expected_result, $rstr);
    }

    /** @test */
    public function is_palindrome_return_boolean_with_the_right_value()
    {
        $str_helper = new \App\Helpers\StringHelper;

        $str = "lol";
        $isPalindrome = $str_helper->isPalindrome($str);
        $expected_result = true;

        $this->assertIsBool($isPalindrome);
        $this->assertEquals($expected_result, $isPalindrome);
    }

    /** @test */
    public function get_possible_substring_return_array_with_the_right_size()
    {
        $str_helper = new \App\Helpers\StringHelper;

        $str = "abc";
        $substrings = $str_helper->getPossibleSubstring($str);
        $expected_result = ['a', 'ab', 'abc', 'b', 'bc', 'c'];

        $this->assertIsArray($substrings);
        $this->assertEquals($expected_result, $substrings);
        $this->assertCount(count($expected_result), $substrings);
    }

    /** @test */
    public function get_possible_palindrome_return_array_with_the_right_size()
    {
        $str_helper = new \App\Helpers\StringHelper;

        $str = "civic";
        $palindromes = $str_helper->getPossiblePalindrome($str);
        $expected_result = ['civic', 'ivi'];

        $this->assertIsArray($palindromes);
        $this->assertEquals($expected_result, $palindromes);
        $this->assertCount(count($expected_result), $palindromes);
    }

    /** @test */
    public function get_longest_palindrome_return_string_with_the_right_value()
    {
        $str_helper = new \App\Helpers\StringHelper;

        $str = "hallosannashi";
        $longestPalindrome = $str_helper->getLongestPalindrome($str);
        $expected_result = "sannas";

        $this->assertIsString($longestPalindrome);
        $this->assertEquals($expected_result, $longestPalindrome);
    }

}
<?php

namespace App\Helpers;

class StringHelper {

    public function reverseString($str)
    {
        $rstr = "";
        
        for ($i=(strlen($str)-1); $i>=0; $i--) {
            $rstr .= $str[$i];
        }

        return $rstr;
    }

    public function isPalindrome($str)
    {
        return (strlen($str) > 1 && $str === $this->reverseString($str)) ? true : false;
    }

    public function getPossibleSubstring($str)
    {
        $arrPossibleSubstr = [];

        for ($i=0; $i<strlen($str); $i++) {
            for ($j=1; $j<=(strlen($str)-$i); $j++) {
                $arrPossibleSubstr[] = substr($str, $i, $j);
            }
        }
        
        return $arrPossibleSubstr;
    }

    public function getPossiblePalindrome($str)
    {
        $arrPossibleSubstr = $this->getPossibleSubstring($str);
        $arrPossiblePalindrome = [];

        for ($i=0; $i<count($arrPossibleSubstr); $i++) {
            if ($this->isPalindrome($arrPossibleSubstr[$i])) {
                $arrPossiblePalindrome[] = $arrPossibleSubstr[$i];
            }
        }

        return $arrPossiblePalindrome;
    }

    public function getLongestPalindrome($str)
    {
        $arrPossibleSubstr = $this->getPossibleSubstring($str);
        $longestPalindrome = "";

        for ($i=0; $i<count($arrPossibleSubstr); $i++) {
            if ($this->isPalindrome($arrPossibleSubstr[$i]) && strlen($arrPossibleSubstr[$i]) > strlen($longestPalindrome)) {
                $longestPalindrome = $arrPossibleSubstr[$i];
            }
        }
       
        return $longestPalindrome;
    }

}
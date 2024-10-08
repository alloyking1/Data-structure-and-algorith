<?php

/**
 * 
 *  Day 1 Challenge: Arrays & Strings (PHP)
 *  1. Task 1: Reverse a String In-Place
 *  Description: Write a function that reverses a given string in-place.
 *  Examples:
 *  Input: "hello"
 *  Output: "olleh"
 */

class stringReverse {
    //using PHP function
    public static function call($str): string {
       return strrev($str);
    }

    // implementing from scratch
    public static function mySolution($str){
        $length = strlen($str) - 1;
        for($i = $length; $i >= 0; $i--){
            echo $str[$i];
        }
        
    }
}

$call = stringReverse::mySolution('hello');
echo $call;
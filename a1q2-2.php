<?php

/**
 * I Andrew Evboifo, 000909727, certify that this material is my original work. 
 * No other person's work has been used without suitable acknowledgment and 
 * I have not made my work available to anyone else.
 * 
 * PHP code finds Erdos-Woods NUmbers within a given range. It does so by validating 
 * that the appropriate start and end inputs are present. We know a number can only 
 * have a max possible factor of 100/2 since our range is 1-100, thus we check against
 * the first 15 numbers in our filtered array until a non divisible number/(s) are found
 * and displayed as html lists
 * 
 * @author Andrew Evboifo
 * @version 20260207.00
 * @package COMP 10260 Assignment 1
 */

if(!isset($_POST['start'])){
    echo "Error: start input not found";
    exit;
}

if(!isset($_POST['end'])){
    echo "Error: end input not found";
    exit;
}

$start = trim($_POST['start']);
$end = trim($_POST['end']);
$prime_numbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47];
$filtered_primes = [];

// check that input is a digit and if so, converts to integer
if(ctype_digit($start) && ctype_digit($end)){
    $int_start = intval($start);
    $int_stop = intval($end);
    $s = $int_start + 1;

    // check that input is within range
    if ($int_start > $int_stop || $int_start < 0 || $int_stop < 0 || $int_start > 100 || $int_stop > 100){
        echo "Error: inputs are out of range, number must be between 1 - 100 and have a starting number less than the end number";
        exit;
    }

    // filters from the $prime_numbers array, all values that are factors of both inputs
    foreach($prime_numbers as $num){
        if($int_start % $num === 0 || $int_stop % $num === 0){
            $filtered_primes[] = $num;
        }
    }

    // nested loops to check for non divisible values within the range and then prints them as html list items
    echo "<ul>";
    for($s; $s < $int_stop; $s++){
        $isDivisible = false;
        foreach($filtered_primes as $filtered){
            if ($s % $filtered === 0){
                $isDivisible = true;
                break;
            } 
        
        }
        if(!$isDivisible){
            echo "<li>$s</li>";
        }
    }
    echo "</ul>";

}else{
    echo "Error: Start and end must be integers between 0 and 100";
    exit;
}

?>

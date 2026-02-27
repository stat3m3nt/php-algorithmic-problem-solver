<?php
/**
 * I Andrew Evboifo, 000909727, certify that this material is my original work. 
 * No other person's work has been used without suitable acknowledgment and 
 * I have not made my work available to anyone else.
 * 
 * This code checks for surviving ants according to our logic, we have two kinds of 
 * ants, the red ants always moving towards the left and the black ant moving towards
 * the right. Ants eliminate themselves when they come in contact but only head on 
 * thus "BR" and not "RB". Therefore we ensure that the users input is valid against 
 * a stored array if so, proceeds identify and eliminate "BR" pairs.
 * 
 * @author Andrew Evboifo
 * @package PHP-Algorithmic-Problem-Solver
 * Last-Updated: 2026-02-07
 */

// initiliazers to count surviving ants
$red_ants = 0;
$black_ants = 0;

// array to check input validity against
$valid = ['R', 'B', 'X'];

//error handler for user input
if (!isset($_GET['ants'])){
    echo "Error: ants parameter not found";
    exit;
}
$ants = $_GET['ants'];

//input validation
foreach(str_split($ants)as $var){
    if(!in_array($var, $valid)){
        echo "Error: Invalid input! try again";
        exit;
    }
}

// Replaces all instances of X with nothing as X represents empty space
$ants = strtr($ants, ['X' => '']);

while (strpos($ants, 'BR') !== false){
    $ants = str_replace('BR', '', $ants);
}
$red_ants = substr_count($ants, 'R');
$black_ants = substr_count($ants, 'B');

//conditional for encounter outcome
if($black_ants > 0 && $red_ants > 0){
    echo "M.A.D";
} elseif($black_ants > 0){
    echo "Black Wins";
}  elseif($red_ants > 0){
    echo "Red Wins";
}else{
    echo "Neither";
}
?>

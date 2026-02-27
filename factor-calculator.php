<?php
/**
 * I Andrew Evboifo, 000909727, certify that this material is my original work. 
 * No other person's work has been used without suitable acknowledgment and 
 * I have not made my work available to anyone else.
 * 
 * This php code validates a users input, ensuring it is an integer and then proceeds
 * to find the factors of that integer. We know a number can only have a maximum value 
 * of half its value, thus we only check for possible factors from 1 up to input/2
 * @author Andrew Evboifo
 * @package PHP-Algorithmic-Problem-Solver
 * Last-Updated: 2026-02-07
 */


if (!isset($_POST['n'])){
    echo "Error reading input";
    exit;
}

$user_input = $_POST['n'];

$num = trim($user_input);

// check that input is a number
if(ctype_digit($num)){
    $factors = [];
    $int = intval($num);

    if($int <= 0){
        echo "Error: input must be greater than 0";
        exit;
    }

    for($i = 1; $i <= $int/2; $i++){
        if ($int % $i === 0){
            $factors[] = $i;
        }
    }

    $factors[] = $int; // adds the number itself as a factor
    echo "Factors of $int are: <br>";
    echo "<ol>";

    foreach($factors as $factor){
        echo "<li>$factor</li>";
    }

    echo "</ol>";
    
}else{
    echo "Error: input must be an integer";
    exit;
}


?>

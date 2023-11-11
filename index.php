<?php

/* This is a simple PHP function that adds two nums together
and returns the result 
*/



function addNumbers($a, $b) {    //Define func (addNumbers) that takes in 2 params ($a and $b)
    return $a + $b;     //Inside func, perform addition of $a and $b and return result
}

// Example useage of addNumbers func
// call addNumbers func with args 5 and 7 and assigns to var result
$result = addNumbers(5, 7);


// Print message including result to output(terminal) 
echo "The result is: $result\n"; 

?>



<?php

function multiplyNums($f, $p) {
    
    return $f * $p;
} 


$newAnswer = multiplyNums(14, 37);

echo "The new answer is going to be: $newAnswer\n" 


?>

<?php

function divideNam($q, $n) {
    // Check if $n is zero
    if ($n == 0) {
        return "you cannot divide by zero";
    }
    
    $theResult = $q / $n;

    if ($theResult % 2 == 0) { 
        return "yay";
    } else {
        return "boo";
    }
}

$divideAns = divideNam(20, 5);

echo "The answer is $divideAns\n"


?>

<?php

function factorial($n) {   //defining func that takes 1 param
    if ($n < 0) {           //if statement to check if param is less than 0
        return "Factorial is not defined for negative numbers";    //if cond is true then return if undef for neg nums
    } elseif ($n == 0 || $n == 1) {    //if cond above is F, check if param is equal to 0 || 1
        return 1;   //if above is true this line returns 1
    } else {   //if no cond above are met
        $result = 1;    //initializes var to 1 
        for ($i = 2; $i <= $n; $i++) {    /*initialize var to 2, cont if $i is <= 1,
                                             each iteration $i is incremented by 1 */ 
            $result *= $i;   //multp curr val of $result by curr val $i and assigns back to $result
        }
        return $result;  //returns final value of $result which reps factorial input of $n
    }
}

$number = 3; 
echo "The factorial of $number is " . factorial($number); 
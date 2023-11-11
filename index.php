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
<?php
// Function to check the given number using if-else statements
function checkNumberWithIfElse($number) {
    if ($number == 0) {
        return "The number is zero.";
    } elseif ($number % 2 == 0) {
        return "The number is even.";
    } else {
        return "The number is odd.";
    }
}

// Function to check the given number using switch-case-like logic
function checkNumberWithSwitchCase($number) {
    switch ($number) {
        case 0:
            return "The number is zero.";
        case ($number % 2 == 0):
            return "The number is even.";
        default:
            return "The number is odd.";
    }
}

// Function to print the table of 2 using a for loop
function printTableOf2() {
    echo "Table of 2:\n";
    for ($i = 1; $i <= 10; $i++) {
        $result = 2 * $i;
        echo "2 x $i = $result\n";
    }
}

// Test the functions with some sample input
$numberToCheck = 7;

// Using if-else
$resultIfElse = checkNumberWithIfElse($numberToCheck);
echo "With if-else: $resultIfElse\n";

// Using switch-case-like logic
$resultSwitchCase = checkNumberWithSwitchCase($numberToCheck);
echo "With switch-case: $resultSwitchCase\n";

// Print table of 2
printTableOf2();
?>

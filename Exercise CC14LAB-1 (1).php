<?php 
// ================== Exercise 1: Variables and Operators ==================
echo "Exercise 1: Variables and Operators\n";
$a = (int)readline("Enter the value for a: ");
$b = (int)readline("Enter the value for b: ");
echo "Sum: " . ($a + $b) . "\n"; 
echo "Difference: " . ($a - $b) . "\n"; 
echo "Product: " . ($a * $b) . "\n"; 
echo "Quotient: " . ($a / $b) . "\n"; 
echo "---------------------------------------------------\n";

// ================== Exercise 2: Conditional Statements ==================
echo "Exercise 2: Conditional Statements\n";
$num = (int)readline("Enter a number: ");
echo ($num % 2 == 0) ? "Even\n" : "Odd\n"; 
echo ($num > 0) ? "Positive\n" : (($num < 0) ? "Negative\n" : "Zero\n"); 
echo "---------------------------------------------------\n";

// ================== Exercise 3: Loops ==================
echo "Exercise 3: Loops - FizzBuzz\n";
// FizzBuzz Loop
$fibonacci = [0, 1]; 
for ($i = 2; $i < 10; $i++) { 
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2]; 
} 
foreach ($fibonacci as $number) { 
    if ($number % 2 == 0) { 
        echo $number . "\n"; 
    } 
}
echo "---------------------------------------------------\n";

echo "Exercise 3: Loops - Fibonacci Sequence\n";
$limit = (int)readline("Enter the number of terms in Fibonacci sequence: ");
$fibonacci = [0, 1];  
for ($i = 2; $i < $limit; $i++) { 
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2]; 
} 
foreach ($fibonacci as $number) { 
    echo $number . "\n"; 
} 
echo "---------------------------------------------------\n";

// ================== Exercise 4: Functions ==================
echo "Exercise 4: Functions - Greeting Function\n";
// 1. Greeting Function 
function greet($name) { 
    return "Hello, " . $name . "! Welcome!"; 
} 
$name = readline("Enter your name: ");
echo greet($name) . "\n"; 

echo "Exercise 4: Functions - Square Function\n";
// 2. Square Function 
function square($number) { 
    return $number * $number; 
} 
$number = (int)readline("Enter a number to square: ");
echo "Square of " . $number . " is " . square($number) . "\n"; 
$number2 = (int)readline("Enter another number to square: ");
echo "Square of " . $number2 . " is " . square($number2) . "\n"; 
?>

<?php 
// ================== Exercise 1: Variables and Operators ==================
echo "Exercise 1: Variables and Operators\n";
$a = 15; 
$b = 7; 
echo "Sum: " . ($a + $b) . "\n"; 
echo "Difference: " . ($a - $b) . "\n"; 
echo "Product: " . ($a * $b) . "\n"; 
echo "Quotient: " . ($a / $b) . "\n"; 
echo "---------------------------------------------------\n";

// ================== Exercise 2: Conditional Statements ==================
echo "Exercise 2: Conditional Statements\n";
$num = -6; 
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
// Fibonacci Sequence Loop
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

// ================== Exercise 4: Functions ==================
echo "Exercise 4: Functions - Greeting Function\n";
// 1. Greeting Function 
function greet($name) { 
    return "Hello, " . $name . "! Welcome!"; 
} 
echo greet("Albin") . "\n"; 

echo "Exercise 4: Functions - Square Function\n";
// 2. Square Function 
function square($number) { 
    return $number * $number; 
} 
echo square(4) . "\n"; 
echo square(5) . "\n"; 
?>

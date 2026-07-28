<?php

echo "My name is: Khaalid Hattas";
$name = "Khaalid Hattas";
$age = 21;
$favoriteColor = "Green";
$favoriteHobby = "Gyming/Rugby";

echo "Hi, I'm {$name}. I'm {$age} years old, my favorite color is {$favoriteColor}, and I love {$favoriteHobby}.\n\n";


echo " Task 2: BMI Calculator \n";
$weight = 70;  // in kilograms
$height = 1.77; // in meters

// BMI = weight (kg) / height (m)^2
$bmi = $weight / ($height ** 2);
$formattedBmi = number_format($bmi, 1);

if ($bmi < 18.5) {
    $category = "Underweight";
} elseif ($bmi >= 18.5 && $bmi < 25) {
    $category = "Normal weight";
} elseif ($bmi >= 25 && $bmi < 30) {
    $category = "Overweight";
} else {
    $category = "Obese";
}

echo "Your BMI is: {$formattedBmi} ({$category}).\n\n";


echo " Task 3: Global vs Local Variables \n";
$globalVar = "Initial Global Value";

function demonstrateScope() {
    $localVar = "I am local";

    global $globalVar;
    $globalVar = "Modified Global Value";

    echo "Inside function - Local: " . $localVar . "\n";
    echo "Inside function - Global: " . $globalVar . "\n";
}

demonstrateScope();
echo "Outside function - Global: " . $globalVar . "\n\n";


echo " Task 4: Type Conversion Experiment \n";
$floatVal = 22.85;

// Convert float to integer using intval()
$intVal = intval($floatVal);

echo "Original Value (float): " . $floatVal . "\n";
echo "Converted Value (integer): " . $intVal . "\n\n";


echo " TASK 5: Data Type Identification\n";
$integerVar = 42;
$floatVar   = 3.14159;
$stringVar  = "Hello, PHP!";
$arrayVar   = ["apple", "banana", "cherry"];

echo "\$integerVar type: " . gettype($integerVar) . "\n";
echo "\$floatVar type:   " . gettype($floatVar) . "\n";
echo "\$stringVar type:  " . gettype($stringVar) . "\n";
echo "\$arrayVar type:   " . gettype($arrayVar) . "\n";

?>
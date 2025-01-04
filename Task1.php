<?php

// Given array of random strings
$randomStrings = ["Apple", "banana", "Apricot", "grape", "avocado", "Mango", "almond"];

// Step 1: Filter strings that start with the letter A (case-insensitive)
$filteredArray = array_filter($randomStrings, function($string) {
    return stripos($string, 'A') === 0;
});

// Step 2: Convert all strings in the filtered array to uppercase
$uppercasedArray = array_map('strtoupper', $filteredArray);

// Step 3: Display the resulting array
print_r($uppercasedArray);

?>

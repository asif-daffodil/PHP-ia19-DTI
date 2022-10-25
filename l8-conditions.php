<?php
$age = -30;

function studentAge($age)
{
    if (!is_int($age)) {
        return "Please provide a number";
    } else {
        if ($age <= 12 && $age > 0) {
            return "You are a baby";
        } elseif ($age <= 19 && $age > 12) {
            return "You are a teenager";
        } elseif ($age < 30 && $age > 19) {
            return "You are a young Person";
        } elseif ($age < 50 && $age >= 30) {
            return "You are a middle-aged Person";
        } elseif ($age >= 50 && $age < 200) {
            return "You are a old Person";
        } else {
            return "You are not in this world!";
        }
    }
}

echo studentAge(25) . "<br>";

$age = 15;

switch ($age) {
    case ($age <= 12 && $age > 0):
        echo "Bogura is a sweet city";
        break;

    case ($age <= 19 && $age > 12):
        echo "Khulna is a small city";
        break;

    case ($age < 50 && $age >= 30):
        echo "Dhaka is a big city";
        break;

    default:
        echo "Dhaka is the capital of Bangladesh";
        break;
}

echo "<br>";

/* 
if (isset($namNai)) {
    echo $namNai;
} else {
    echo "Thank you";
} 
*/

echo $namNai ?? "Thank you <br>";

$teeth = 32;

/* 
if ($teeth >= 32) {
    echo "Welcome";
} else {
    echo "Sorry";
} 
*/

echo ($teeth >= 32) ? "Welcome" : "Sorry!";

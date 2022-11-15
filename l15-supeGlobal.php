<?php

//GLOBALS

$age = 15;

function returnAge()
{
    return $GLOBALS["age"];
}

// echo returnAge() . "<br>";

// $_GET
echo $_GET["city"] ?? null;

// $_POST
echo $_POST["email"] ?? null;

// $_REQUEST
echo $_REQUEST["email"] ?? null;

// $_SERVER
echo $_SERVER['REQUEST_METHOD'] . "<br>";
echo basename($_SERVER['PHP_SELF']);

<?php
$x = "This is a demo text.";
echo strlen($x) . "<br>";
echo strrev($x) . "<br>";
echo md5($x) . "<br>";
echo strpos($x, "demo") . "<br>";
echo str_replace("demo", "dangerous", $x) . "<br>";
echo str_word_count($x) . "<br>";
echo substr($x, 10, 4) . "<br>";
echo str_shuffle($x) . "<br>";
echo random_int(100000, 999999) . "<br>";
echo uniqid();

<?php
//string
$x = "This is a PHP Class";
var_dump($x);
echo "<br>";

//integer
$x = 123;
var_dump($x);
echo "<br>";

//float
$x = 123.456;
var_dump($x);
echo "<br>";

//boolean
$x = true;
var_dump($x);
echo "<br>";

//null
$x = null;
var_dump($x);
echo "<br>";

//array
$x = ['kamal', 'Jamal', 'Tomal'];
var_dump($x);
echo "<br>";

//object
class myclass
{
    public $pro = null;
}

$x = new myclass;
var_dump($x);
echo "<br>";

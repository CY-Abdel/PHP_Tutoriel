<?php
$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);
var_dump($b);
var_dump($c);

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

$x = 10.365;
var_dump(is_float($x));
var_dump(!is_float($x));

$x = 1.9e411;
var_dump($x); // infinity car > max float

$x = "59.85" + 100;
var_dump(is_numeric($x)); // bool(true)

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x)); // bool(false)

echo "<br>";

// *************** PHP Constants
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

echo "<br>";

const MYCAR = "Volvo";
echo MYCAR;

echo "<br>";
echo "<br>";

define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];

echo "<br>";




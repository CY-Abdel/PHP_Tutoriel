<?php
echo "Hello World!<br>";
ECHO "Hello World!<br>";
eCHo "Hello World!<br>";
echo "<br>";

$color = "red";
echo "My car is " . $color . "<br>";
echo "<br>";

// comment one line
# comment ont line
/*
 * comment multi line
 * */

//Variables
$txt = "vde";
echo "I love $txt!";
echo "<br>";

echo "I love " . $txt . "!";
echo "<br>";

$x = 5;
$y = 4;
echo $x + $y;
echo "<br>";

$x = 5;      // $x is an integer
$y = "Juba"; // $y is a string
echo $x;
echo $y;

//The var_dump() function returns the data type and the value:
var_dump($x);
var_dump("Juba");
echo "<br>";

function myTest() {
    $a = 5; // local scope
    echo "<p>Variable x inside function is: $a</p>";
}
myTest();

// using x outside the function will generate an error
//echo "<p>Variable x outside function is: $a</p>";

//Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
function myTest2() {
    static $x = 0;
    echo $x;
    $x++;
}
myTest2(); #0
echo "<br>";
myTest2(); #1
echo "<br>";
myTest2(); #2
echo "<br>";

print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

$txt1 = "Learn PHP";
$txt2 = "VDE";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;

$x = "John";
print '<br>Hello $x'; // Hello $x
print "<br>Hello $x"; // Hello John
echo "<br>";

echo strlen($x);
echo "<br>";

echo str_word_count($x);
echo "<br>";
echo str_word_count("trois mots ici☻");
echo "<br>";

echo strpos("index de juba dans ce texte", "juba");
echo "<br>";



?>

</body>
</html>
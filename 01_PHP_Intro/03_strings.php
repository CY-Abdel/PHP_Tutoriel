<?php

$x = "John";
print '<br>Hello $x'; // Hello $x
print "<br>Hello $x"; // Hello John
echo "<br>";

echo strlen($x);
echo "<br>";

echo str_word_count($x);
echo "<br>";

echo str_word_count("trois mots ici ☻");
echo "<br>";

echo strpos("index de juba dans ce texte", "juba");
echo "<br>";

$a = "min en maj avec strtoupper";
$a = strtoupper($a) ;
echo $a . "<br>";

$b = "MAJ EN MiN AVEC STRTOlower";
echo strtolower($b);
echo $a . "<br>";

$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
echo "<br>";

$x = "Hello World!";
echo strrev($x);
echo "<br>";

$x = " trim removes spaces : start & end ";
echo $x;
echo "<br>";
echo trim($x);
echo "<br>";

$y = explode(" ", trim($x));
//Use the print_r() function to display the result:
print_r($y);
echo "<br>";

$x = "Hello World!";
echo substr($x, 6, 5);
echo "<br>";

$x = "Hello World SAD!";
echo substr($x, 6);
echo "<br>";

?>

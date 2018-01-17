<?php

include 'userMessages.php';
include 'incrementer.php';
include 'timeHelper.php';

echo $welcomeHeader;
echo $welcomeMessage;

$b = $a = 5;
echo $a;
echo $b;

echo "<h3>Postincrement</h3>";
$a = 5;
echo "Should be 5: " . $a++ . "<br />\n";
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "Should be 6: " . ++$a . "<br />\n";
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>fun with variable variables</h3>";

$e = 'hello';
// variable with name hello created
$$e = 'world';
echo "<br/>$e $hello";

$a = "b";
$b = "c";
$c = "!";

echo $$$a;

//countToTen();

?>
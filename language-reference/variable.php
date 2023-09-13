<?php
/*
x = 2
y = 3
x + y = ?
2 + 3 = 5

1. $
2. We can't start with digit [0-9] (Ex: $10number)
3. We will start [a-z or A-Z or _] (Ex: $aName or $Aname or $_name or $_name0)

$%& = 5 // invalid
$0name = 5 // invalid
*/

$salary = 5000;
$x = 5;
$y = 2;
$_name = 'Chanchal';
$firstName = 'Jon';

echo $salary;
echo "\n";
echo $_name;
echo "\n";
echo $x + $y; // 5 + 2
echo "\n";

// PHP Variable Name Case Sensitive
$age = 5;
$AGE = 10;

echo $AGE;
echo "\n";
echo "\n";

// Same Name
$count = 1;

echo $count;
echo "\n";

$count = 5;

echo $count;
echo "\n";
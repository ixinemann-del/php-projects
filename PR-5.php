<?php
$a = 20;
$b = 10;

echo "Addition = ".($a+$b)."<br>";
echo "Subtraction = ".($a-$b)."<br>";
echo "Multiplication = ".($a*$b)."<br>";
echo "Division = ".($a/$b)."<br>";
echo "Modulus = ".($a%$b);
?>

<?php
$a = 15;
$b = 20;

if($a > $b)
    echo "First number is greater";
elseif($a < $b)
    echo "First number is smaller";
else
    echo "Both numbers are equal";
?>

<?php
$num = 25;

if($num > 10 && $num < 50)
    echo "Number is between 10 and 50";
else
    echo "Number is not between 10 and 50";
?>

<?php
$marks = 60;

if($marks >= 35 && $marks <= 100)
    echo "Student Passed";
else
    echo "Student Failed";
?>
<?php
$a = true;
$b = false;

echo "AND result: ";
var_dump($a && $b);

echo "<br>OR result: ";
var_dump($a || $b);

echo "<br>NOT result: ";
var_dump(!$a);
?>

<?php
$age = 20;
$citizen = true;

if($age >= 18 && $citizen == true)
    echo "Eligible to vote";
else
    echo "Not eligible to vote";
?>

<?php
$a = "10";
$b = 10;

if($a == $b)
    echo "Equal using ==";

echo "<br>";

if($a === $b)
    echo "Equal using ===";
else
    echo "Not equal using ===";
?>

<?php
$a = 60;
$b = 50;

$total = $a + $b;

echo "Total = $total <br>";

if($total > 100)
    echo "Total is greater than 100";
else
    echo "Total is less than or equal to 100";
?>

<?php
$num = -5;

if($num > 0)
    echo "Positive number";
elseif($num < 0)
    echo "Negative number";
else
    echo "Number is zero";
?>

<?php
$a = 20;
$b = 30;

if(($a + $b) > 40 && $a < $b)
    echo "Condition is True";
else
    echo "Condition is False";
?>
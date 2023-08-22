<?php
/*
21-Assignment operators
=======================
*/
$a = 10;
$a = $a + 20;
//==>
$a += 20;
echo $a;

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
22-Comparison Operators
=======================
==  => equal => بتقارن قيمه بقيمه
!=  => not equal
<>  => not equal
=== => Identical => بتقارن قيمه ونوع
!== => not Identical
*/

var_dump(100 == "100");
echo '<br>';
var_dump(100.0 == "100");

echo '<br>';
echo '<br>';
echo '<br>';

var_dump(100 === "100");
echo '<br>';
var_dump(100.0 === "100");
echo '<br>';

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
23-Comparison Operators 2
=========================
>   => Large than
>=  => Large than or Equal
<   => Smaller than
<=  => Smaller than or Equal
<=> => Spaceship[less than,Equal or Greater]
*/

var_dump(100 <=> 200); //-1
echo '<br>';
var_dump(100 <=> 100); //0
echo '<br>';
var_dump(100 <=> 50); //1

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
24-Incrementing & Decrementing operators
========================================
Increase And Decrease values
*/
echo '<br>';
$A = 0;

echo '<br>';
echo $A++; //post 0
echo '<br>';
echo ++$A; // pre 2
echo '<br>';
echo '<br>';
echo $A; // 2

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
25-Logical Operators
====================
and / &&
or  / ||
Xor ===>مختلفين ==> true
!
*/
echo '<br>';
var_dump(100 > 50 and 100 > 200);
echo '<br>';
var_dump(100 > 50 or 100 > 200);
echo '<br>';
var_dump(100 > 50 xor 100 > 200);

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
26-String Operator
==================
Concatenate Strings /.=
*/
echo '<br>';
echo '<br>';
$x  = "elzero ";
$x .= "web";
$x .= " school";

echo $x;

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
27-Array Operator
=================
+ => Union
===  ==>int لازم يتساوى ف ==> الترتيب و النوع 
*/
$arr1 = [1 => "a", 2 => "b"];
$arr2 = [3 => "c", 4 => "d"];

echo '<br>';

echo '<pre>';
print_r($arr1 + $arr2);
echo '</pre>';

echo '<br>';

$arr3 = [1 => "a", 2 => "b"];
$arr4 = [2 => "b", 1 => "a"];

echo '<br>';
echo '<br>';

var_dump($arr3 == $arr4);
echo '<br>';
echo '<br>';
var_dump($arr3 === $arr4);
echo '<br>';

$arr5 = [1 => "a", 2 => "b"];
$arr6 = [1 => "a", 2 => "b"];
var_dump($arr5 === $arr6);
echo '<br>';

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
28-Error Control Operator
=========================
@
File ===> into array
variable
Include
*/

// Variable
$alex = 10;
$blex = @$alex or die("vaiable not found");
echo $blex;
echo '<br>';

// File
$f = file("fatma.txt");
$ff = @file("fatma.txt") or die("file not found");
echo '<pre>';
print_r($f);
echo '</pre>';

echo '<br>';
echo '<br>';

//Include
include("fatma.txt");

echo '<br>';
echo '<br>';

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
29-Operator Precedence
======================
|| ==> Greater than or ليها الاولويه
&& ==> Greater than and
*/

$s = 10 || false;
echo $s;

echo '<br>';
echo '<br>';

$ss = 10 or false;
echo $ss;

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
30-If / Elseif/Else <= Basics
=============================
*/
echo '<br>';
echo '<br>';
if (10 < 5) {
    echo "Yes";
} elseif (10 < 8) {
    echo "YES OR NO";
} else {
    echo "NO";
}

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
31-32-If/Elseif Examples
=====================
<?php

    Control Structure
    - If, Elseif, Else <= Advanced Practice

    30% To 60%

  if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if ($_POST['lang'] == 'ar') {

      header("Location: ar.php");

      exit();

    } elseif ($_POST['lang'] == 'en') {

      header("Location: en.php");

      exit();

    }

  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
  </head>
  <body>
    <form action="" method="POST">
      <input type="text" name="username">
      <select name="lang">
        <option value="ar">Arabic</option>
        <option value="en">English</option>
        <option value="es">Spanish</option>
      </select>
      <input type="submit" value="Go">
    </form>
  </body>
</html>
*/
echo '<br>';
echo '<br>';

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
33- if==>Alternate Syntax
*/


if (10 > 5) {

    echo "Good";
} else {

    echo "Bad";
}

echo "<br>";

if (10 > 10) echo "Good";
else echo "Bad";

echo "<br>";

if (10 > 10)
    echo "Good";
else
    echo "Bad";

echo "<br>";

if (10 > 10) echo "Good";
else echo "Bad";

?>
<?php if (10 > 5) : ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        Hello Page
    </body>

    </html>

<?php endif; ?>

<?php

if (10 > 10) :

    echo "First";

elseif (10 > 10) :

    echo "Second";

else :

    echo "Last";

endif;

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
34-Nested if
*/

$name = "Osama";
$is_student = true;
$is_orphan = true;
$country = "Egypt";
$country_discount = 50;
$price = 100;
$student_discount = 10;
$orphan_discount = 15;

if ($country == "Egypt") {

    if ($is_student == true) {

        if ($is_orphan == true) {

            echo "Hello $name";
            echo "<br>";
            echo "Country Discount $country_discount";
            echo "<br>";
            echo "Student Discount $student_discount";
            echo "<br>";
            echo "Orphan Discount $orphan_discount";
            echo "<br>";
            echo "The Final Price Is " . $price - $country_discount - $student_discount - $orphan_discount;
        } else {

            echo "Hello $name";
            echo "<br>";
            echo "Country Discount $country_discount";
            echo "<br>";
            echo "Student Discount $student_discount";
            echo "<br>";
            echo "The Final Price Is " . $price - $country_discount - $student_discount;
        }
    } else {

        echo "Hello $name";
        echo "<br>";
        echo "Country Discount $country_discount";
        echo "<br>";
        echo "The Final Price Is " . $price - $country_discount;
    }
} else {

    echo "Hello $name";
    echo "<br>";
    echo "No Discount";
    echo "<br>";
    echo "The Final Price Is $price";
}

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
35-Ternary Conditional: condition?true:false;
============================================
*/
$a = 10;

if ($a > 8) {

    echo "Good";
} else {

    echo "Bad";
}

// Condition ? True : False;

echo $a > 8 ? "Good" : "Bad";

echo '<br>';

echo "I Love PHP Because Its A ";

if ($a > 8) {

    echo "Good";
} else {

    echo "Bad";
}

echo " Language";

echo '<br>';

echo "I Love PHP Because Its A " . ($a > 8 ? "Good" : "Bad") . " Language";

echo '<br>';

$result = $a > 8 ? "Good" : "Bad";

echo "I Love PHP Because Its A $result Language";
?>
<?php
/*
36-Switch
==========
    Control Structure
    - Switch

    Syntax
    switch (expression) {
      Case 1:
        // Code Block 1
        break;
      Case 2:
        // Code Block 2
        break;
      Case 3:
        // Code Block 3
        break;
      Default:
        // Default Code Block
    }

  */

$day = "Thu";

switch ($day) {

  case "Sat":
    echo "Hello Today Is $day We Are Open From 10:16";
    break;

  case "Sun":
    echo "Hello Today Is $day We Are Open From 12:18";
    break;

  case "Mon":
  case "Thu":
    echo "Hello Today Is $day We Are Open From 08:12";
    break;

  default:
    echo "Unknown Day";
}

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
37-Loop(While)
==============
    Control Structure
    - Loop

    While

  // echo "1<br>";
  // echo "2<br>";
  // echo "3<br>";
  // echo "4<br>";
  // echo "5<br>";

  // echo "1<br>2<br>3<br>4<br>5<br>";
*/
$i = 1;

while ($i <= 3) {

  echo "$i<br>";

  $i++;
}

$a = 1;

while ($a <= 3) :

  echo "$a<br>";

  $a++;

endwhile;

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
38-Do While
===========
    Control Structure
    - Loop

    Do, While
  */

$i = 4;

while ($i <= 3) {

  echo "$i<br>";

  $i++;
}

do {

  echo "$i<br>";

  $i++;
} while ($i <= 3);


$index = 0;

while ($index <= 100) {

  echo "$index<br>";

  $index += 5;
}
echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
39-Loop(For):
=============
    Control Structure
    - Loop

    For
    - Expression One Run Once At The First Of The Loop
    - In The Begining Of Iteration Expression Two Is Checked [If True Continue || Break]
    - At The End Of Iteration Expression Three Are Executed
  */

$i = 1;

while ($i <= 3) {

  echo "$i<br>";

  $i++;
}

echo '##### <br>';

for ($i = 1; $i <= 3; $i++) {

  echo "$i<br>";
}

echo '##### <br>';

$index = 1;

for (;;) :

  if ($index == 4) {

    break;
  }

  echo "$index<br>";

  $index++;

endfor;


for ($i = 5; $i > 0; $i--) {
  for ($j = 0; $j < $i; $j++) {
    echo "*";
  }
  echo '<br>';
}
echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
40-ForEach
==========
    Control Structure
    - Loop

    Foreach
  */

$countries = ["EG", "SA", "QA", "SY"];

echo '<pre>';
print_r($countries);
echo '</pre>';

foreach ($countries as $country) {

  echo $country . "<br>";
}

$countries_with_discount = ["EG" => 50, "SA" => 30, "QA" => 50, "SY" => 70];

echo '<pre>';
print_r($countries_with_discount);
echo '</pre>';

foreach ($countries_with_discount as $country => $discount) :

  echo "Country Name Is $country And Discount Is $discount <br>";

endforeach;

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
41-Break VS continue
====================
    Control Structure
    - Loop

    Break, Continue
    - Break Ends Execution Of (For, Foreach, While, Do-while or Switch)
    - Skip Current Iteration
  */

foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

  if ($country == "USA") {

    break;
  }

  echo $country . "<br>";
}

echo "########## <br>";

foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

  if ($country == "USA") {

    continue;
  }

  echo $country . "<br>";
}

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
42-Include / Require /once
==========================
    Control Structure
    - Including Files

    Include
    Require
  */

include_once("test.php"); // $a = 10;

echo $a . '<br>';

$a = 20;

include_once("test.php"); // $a = 10;

echo $a . '<br>';

echo "Continue";

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
43-Function
============
    Function
    - Introduction And DRY Concept
    - Parameter
    - Argument
  */

echo "Hello Mr Osama<br>";
echo "Hello Mr Ahmed<br>";
echo "Hello Mr Sayed<br>";

function say_hello($someone)
{
  echo "Hello Mr $someone<br>";
}

say_hello("Osama");
say_hello("Ahmed");
say_hello("Sayed");

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
44-Function
    Function
    - Advanced Examples With Parameters And Arguments
    - Real Life Example
  */

function say_hello_to($one, $two)
{
  echo "Hello $one $two<br>";
}
say_hello_to("Osama", "Ahmed");

function deep_freezer($item)
{
  if ($item === "Water") {
    echo "Make Ice <br>";
  } elseif ($item === "Coca Cola") {
    echo "Make It Cold <br>";
  } elseif ($item === "Fruits") {
    echo "Make It Fresh <br>";
  } else {
    echo "Unknown Item";
  }
}

deep_freezer("Water");
deep_freezer("Coca Cola");
deep_freezer("Fruits");
deep_freezer("Tv Remote");

function Say_hello_to1($one, $two)
{
  echo "hello $one <br>";
  echo "hello $two <br>";
}
Say_hello_to1("ali", "aya");

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
45-Function 
And Return==> اى حاجه بعدها مش بشتغل/
            Null لو مكتبتهاش بتطبع قيمه نوعها  / 
And Echo
================================
    Function
    - Optional Return &#038; Null
    - End After Return
  */

$prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];

function get_number($num_one, $num_two)
{
  return $num_one + $num_two;
  echo "Will Not Echo Anything";
}

// get_number(2, 1); // 3
// echo $prizes[3]; // "Apple TV"
// $prize_number = get_number(2, 1);
// var_dump($prize_number);
// echo $prizes[];

// $prize_number = get_number(2, 1);
// var_dump($prize_number);

echo $prizes[get_number(2, 1)];

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
46-Default Parameter value:
============================
    Function
    - Default Parameter Value
    --- Using
    --- Test Data
    --- Skip Arguments
  */

function get_data($country = "Private Country", $name = "Private", $age = "Private", $address = "Private Address")
{
  // if ($address === "") {
  //   $address = "Private Address";
  // }
  $line_one = "Your Country Is $country And Your Name Is $name <br>";
  $line_two = "Your Age Is $age And You Live In $address";
  return $line_one . $line_two;
}

echo get_data(address: "Cairo");

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
47-variable Arguments list
==========================
    Function
    - Variable Arguments List
    --- func_num_args()
    --- func_get_arg(index)
    --- func_get_args()

    Spread Syntax In JS
  */

function calculate(...$nums)
{
  // echo "Number Of Arguments: " . func_num_args() . "<br>";
  // echo "Argument Index Number 3 Is " . func_get_arg(3) . "<br>";
  // print_r(func_get_args());
  // $result = 0;
  // foreach (func_get_args() as $arg) :
  //   $result += $arg;
  // endforeach;
  // echo $result;
  echo "Argument Index Number 3 Is " . $nums[3] . "<br>";
  print_r($nums);
  $result = 0;
  foreach ($nums as $num) :
    $result += $num;
  endforeach;
  echo $result;
}

calculate(10, 20, 50, 30, 40, 50, 100);

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
48- Training and unpacking arguments
====================================
    Function
    - Function Advanced Training
    -- Unpacking In Arguments

    Search
    - PHP Variadic Functions
    - Splat Operator
  */

$group_of_skills = ["HTML", "CSS", "JS", "PHP"];

function get_data1($name, $country = "Private", ...$skills)
{
  echo "Hello $name Your Country Is $country <br>";
  foreach ($skills as $skill) :
    echo "-- $skill <br>";
  endforeach;
}

// get_data("Osama", "Egypt", ...$group_of_skills);
get_data1("Osama", "Egypt", ...["HTML", "CSS", "JS", "PHP"]);

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
    49-Function
    - Variable Function
    --- PHP Allow To Use Variable Like Function
    --- When You Append Parentheses () To Variable PHP Will Look For Function With That Name
    - Function Exists
    --- function_exists("Func Name")
  */

function one()
{
  return "One From Function";
}

// echo one();

$func1 = "one";

echo $func1();

echo '<br>';

function say_hello_Too($someone)
{
  return "Hello $someone";
}

$func2 = "say_hello_Too";

echo $func2("Osama");

echo '<br>';

function testing()
{
  return "Testing From Function";
}

if (function_exists("testing")) {
  echo testing();
} else {
  echo "Function Not Found";
}

echo '<br>';

// echo strlen("Elzero"); // 6

$func3 = "strlen";

echo $func3("Elzero");

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';
/*
    50-Function
    - Passing Arguments by Reference
    --- By Default, Function Arguments Are Passed By Value
    --- If The Value Of The Argument Inside The Function Changed It Will Not Change Outside
    --- To Change It Outside Pass The Argument By Reference

    - Return Type Declarations

    Search
    - PHP Strict Mode
  */

function add_five(&$number)
{
  $number += 5;
  return $number;
}

$n = 15;

echo add_five($n) . "<br>"; // 20

echo $n; // 20

echo '<br>';

function calculate1($n1, $n2): int
{
  return $n1 + $n2;
}

echo calculate1(10.5, 9.5);

echo '<br>';

echo gettype(calculate1(10.5, 9.5)); // Integer
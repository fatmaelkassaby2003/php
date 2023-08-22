<?php

/*
51-Anonymous Function
==================
    Function
    - Anonymous Function
    --- When We Create A Function We Give It A Name So We Can Call It Later With That Name
    --- Sometimes We Need To Create A Function For Specific Task <= This Is Not Against DRY

    - Variable Inherit From Parent Scope
    - Variable Inherit By Reference From Parent Scope
    - Anonymous Function Can Be Passed To A Function
    - Anonymous Function Can Be Return From A Function

    Search
    - Closure
  */

// Normal Function With Parameter

function say_hello_to($someone)
{
    return "Hello $someone";
}

echo say_hello_to("Osama");

echo '<br>#########<br>';

// Anonymous Function In Variable

$say_hello = function () {
    return "Hello";
};

echo $say_hello();

echo '<br>#########<br>';

// Anonymous Function With Parameter In Variable

$say_hola = function ($someone) {
    return "Hola $someone";
};

echo $say_hola("Osama");

echo '<br>#########<br>';

// Inherit Variable From Parent Scope

$msg = "Hi";

$say_hi = function ($someone) use ($msg) {
    return "$msg $someone";
};

echo $say_hi("Osama");

echo '<br>#########<br>';

// Pass Anonymous Function To Function => array_map

$nums = [10, 20, 30, 40, 50];

function add_five($item)
{
    return $item + 5;
}

$nums_after_adding_five = array_map("add_five", $nums);

echo '<pre>';
print_r($nums_after_adding_five);
echo '</pre>';

$nums_after_adding_ten = array_map(function ($item) {
    return $item + 10;
}, $nums);

echo '<pre>';
print_r($nums_after_adding_ten);
echo '</pre>';

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
    52-Function
    ============
    - Arrow Function
    --- Short Syntax For Anonymous Function
    --- Automatic Use Variables From Parent Scope

    - Syntax
    --- Function Replaces With fn
    --- No Need For Curly Braces
    --- Return Is Omitted
  */

// Arrow Function In Variable

$say_hello = fn () => "Hello";

echo $say_hello();

echo '<br>#########<br>';

// Arrow Function With Parameter In Variable

$say_hola = fn ($someone) => "Hola $someone";

echo $say_hola("Osama");

echo '<br>#########<br>';

// Arrow Inherit Variable From Parent Scope Is Automatic

$msg = "Hi";

$say_hi = fn ($someone) => "$msg $someone";

echo $say_hi("Osama");

echo '<br>#########<br>';

// Pass Arrow Function To Function => array_map

$nums = [10, 20, 30, 40, 50];

$nums_after_adding_ten = array_map(fn ($item) => $item + 10, $nums);

echo '<pre>';
print_r($nums_after_adding_ten);
echo '</pre>';

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
    53-String
    =========
    - Access Elements
    --- String Is Array Of Characters
    --- Access Elements By Index "Zero Based Indexing"
    --- Negative Index Are Allowed
    - Update Elements
    --- Update Current Elements
    --- Add New Elements

    Search
    - Single-Byte and Multi-Byte
  */

$str = "Elzero";

echo "First Letter Is $str[0]<br>";
echo "4th Letter Is $str[3]<br>";
echo "Number Of Letters " . strlen($str) . "<br>";
echo "Last Letter Is $str[-1]<br>";
echo "Last Letter Is {$str[strlen($str) - 1]}<br>";

echo $str . "<br>";
$str[0] = "A";
echo $str . "<br>";
$str[6] = "A";
echo $str . "<br>";

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
    54-String Functions
    ====================
    - lcfirst(String[Required])
    - ucfirst(String[Required])
    - strtolower(String[Required])
    - strtoupper(String[Required])
    - ucwords(String[Required], Delimiters[Optional])
    - str_repeat(String[Required], Count[Required])
  */

echo lcfirst("Elzero Web School") . "<br>";
echo ucfirst("elzero web school") . "<br>";
echo strtolower("ELZERO WEB SCHOOL") . "<br>";
echo strtoupper("elzero web school") . "<br>";
echo ucwords("elzero web school") . "<br>";
echo ucwords("elzero web|school", "|") . "<br>";
echo str_repeat("Elzero", 3);

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
    55-String Functions
    ===================
    - implode(Separator[Optional], Array[Required]) => join() Is Alias
    - explode(Separator[Required], String[Required], Limit[Optional])
    - str_shuffle(String[Required])
    - strrev(String[Required])
    - trim(String[Required], CharsList[Optional])
    - ltrim(String[Required], CharsList[Optional])
    - rtrim(String[Required], CharsList[Optional])
    --- Space ""
    --- Tab \t
    --- New Line \n
    --- Carriage Return \r
    --- Vertical Tab "\x0B"
    --- NULL "\0"
  */

$friends = ["Ahmed", "Osama", "Ali", "Salem"];

echo implode(" ", $friends) . "<br>";
echo implode(", ", $friends) . "<br>";
echo implode("@@", $friends) . "<br>";
echo implode($friends) . "<br>";

$str = "Elzero Web School Is Cool";

echo "<pre>";
print_r(explode(" ", $str));
echo "</pre>";

echo "<pre>";
print_r(explode("I", $str));
echo "</pre>";

echo "<pre>";
print_r(explode(" ", $str, 3));
echo "</pre>";

echo "<pre>";
print_r(explode(" ", $str, -2));
echo "</pre>";

echo str_shuffle("Elzero") . "<br>";
echo strrev("Elzero") . "<br>";

echo strlen("   Elzero  ") . "<br>";
echo strlen(trim("   Elzero  ")) . "<br>";

echo trim("#@@Elzero@@@###", "@") . "<br>";

echo rtrim("#@@Elzero@@@###", "#@") . "<br>";
echo ltrim("#@@Elzero@@@###", "#@") . "<br>";

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
    56-String Functions
    ===================
    - chunk_split(String[Required], Length[Optional], End[Optional])
    - strlen(String[Required])
    - str_split(String[Required], Length[Optional])
    - strip_tags(String[Required], Allowed[Optional])
    - nl2br(String[Required], XHTML[Optional])
  */

echo chunk_split("Elzero Web School", 3, "@");
echo '<br>';

echo '<pre>';
print_r(str_split("Elzero"));
echo '</pre>';

echo '<pre>';
print_r(str_split("Elzero", 2));
echo '</pre>';

echo "<h3>Hello <b>Elzero</b></h3>";
echo '<br>';

echo strip_tags("<h3>Hello <b>Elzero</b></h3>");
echo '<br>';

echo strip_tags("<h3>Hello <b>Elzero</b></h3>", "<h3><b>");
echo '<br>';

echo nl2br("Elzero\nWeb\nSchool", false);

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
    57-String Functions
    ===================
    - strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])
  */

var_dump(strpos("Hello Hello", "H")); // 0
echo '<br>';
var_dump(strpos("Hello Hello", "H", 3)); // 6
echo '<br>';
var_dump(strpos("Hello Hello", "H", 6)); // 6
echo '<br>';
var_dump(strpos("Hello Hello", "h")); // False
echo '<br>';
var_dump(strpos("Hello Hello", "H", -2)); // False
echo '<br>';
var_dump(strpos("Hello Hello", "H", -5)); // 6
echo '<br>';
var_dump(strpos("Hello Hello", "H", -11)); // 0
echo '<br>';
var_dump(strrpos("Hello Hello", "H")); // 6
echo '<br>';
var_dump(strrpos("Hello Hello", "H", 5)); // 6
echo '<br>';
var_dump(stripos("Hello Hello", "h")); // 0
echo '<br>';
var_dump(strripos("Hello Hello", "h")); // 6
echo '<br>';
var_dump(substr_count("Hello Hello", "He")); // 2
echo '<br>';
var_dump(substr_count("Hello Hello", "He", 1)); // 1
echo '<br>';
var_dump(substr_count("Hello Hello", "He", 1, 6)); // 0
echo '<br>';
var_dump(substr_count("abcdabcda", "abcda")); // 1

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';


/*
    58-String Functions
    ===================
    - parse_str(String[Required], Array[Required])
    - quotemeta(String[Required])
    - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
    --- STR_PAD_BOTH
    --- STR_PAD_LEFT
    --- STR_PAD_RIGHT
    - strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
  */

parse_str("name=Osama&email=fatma@123&os=USA", $query);

echo '<pre>';
print_r($query);
echo '</pre>';

echo $query["name"] . "<br>";
echo $query["email"] . "<br>";
echo $query["os"] . "<br>";

echo "Hello [] () * + . <br>";
echo quotemeta("Hello [] () * + . <br>");

echo str_pad("12", 8, 0, STR_PAD_BOTH) . "<br>";
echo str_pad("321", 8, 0, STR_PAD_BOTH) . "<br>";
echo str_pad("1313", 8, 0, STR_PAD_LEFT) . "<br>";
echo str_pad("15435", 8, 0, STR_PAD_LEFT) . "<br>";
echo str_pad("500432", 8, 0, STR_PAD_LEFT) . "<br>";

echo strtr("E@zero Web Schoo@", "@", "l");

echo "<br>";

$translation = ["@" => "l", "#" => "o"];

echo strtr("E@zer# Web Sch##@", $translation);

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
    59-String Functions
    ===================
    - str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
    --- Its Case-Sensitive
    - str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
  */

echo str_replace("@", "o", "Elzer@ Web Sch@@l", $r); // Elzero Web School
echo '<br>';
echo "Replaces Count Is $r"; // 3
echo '<br>';
echo str_replace(["#", "@"], "A", "E#zer@ Web Sch@@#"); // EAzerA Web SchAAA
echo '<br>';
echo str_replace(["#", "@"], ["l", "o"], "E#zer@ Web Sch@@#"); // Elzero Web School

echo '<pre>';
print_r(str_replace("One", 1, ["One", "Two", "Three", "One", "One"]));
echo '</pre>';

echo '<pre>';
print_r(str_replace(["One", "Two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
echo '</pre>';

echo '<pre>';
print_r(str_replace(["One", "Two", "Three"], [1, 2], ["One", "Two", "Three", "One", "One"]));//empty string
echo '</pre>';

echo '<pre>';
print_r(str_ireplace(["one", "two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
echo '</pre>';

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

/*
    60-String Functions
    ===================
    - substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
    --- $ Positive Number => Length Of String To Be Replaced
    --- $ Negative Number => Characters Left At The End After Replacement
    --- $ 0               => Insert Instead Of Replace
  */

echo substr_replace("OneTwo", 1, 0); // 1
echo '<br>';
echo substr_replace("OneTwo", 1, 3); // One1
echo '<br>';
echo substr_replace("OneTwo", 1, 5); // OneTw1
echo '<br>';
echo substr_replace("OneTwo", 1, -1); // OneTw1
echo '<br>';
echo substr_replace("OneTwo", 2, 2); // On2
echo '<br>';
echo substr_replace("OneTwo", 2, 2, 2); // On2wo
echo '<br>';
echo substr_replace("OneTwo", 2, 1, 4); // O2o
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, 3); // Elzero_A_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -1); // Elzero_Al eb_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -3); // Elzero_Aool eb_Sch
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -9); // Elzero_Aeb_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -10); // Elzero_AWeb_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "@", 1, 0); // E@lzero_Web_School

echo "<pre>";
print_r(substr_replace(["OneTwo", "ThreeFour"], 1, 0));
echo "</pre>";

echo '<br>';
echo '<br>';
echo '################################';
echo '<br>';
echo '<br>';

<?php
//phpinfo();

/* Print*/
echo 'hello';
echo '<br>';
print "welcome <br>";

/*
Comment 
//,#--> single
/*Multiple Lines ممكن جوا سطر الكود لان ليه بدايه و نهايه*/

//Data Type 6
/*
bool ==> true/false 
int ==> integer رقم صحيح==>negitive or positive
float ==> كسور /double
string ==>text
array ==>important ==>مجموعه
#Other Types
gettype() ==> built in FUN
*/

echo gettype(true);
 echo'<br>'; // تحت بعض
echo gettype(60);
echo'<br>';
echo gettype(60.5);
echo'<br>';
echo gettype('fatma');
echo'<br>';
echo gettype(array('fatma','ali'));
echo'<br>';
echo gettype(['fatma','ali']);
echo'<br>';
echo'<br>';
echo'<br>';

/*
7-type juppling+automatic type conversion==> بتقدر تحدد نوع العمليه حتى لو كاتب  الصيغه غير سليمه 
=========================================
*/
echo '2'+1;
echo'<br>';
echo gettype('2'+1);
echo'<br>';
echo gettype('2 lesson'+1);//10 Warning value
echo'<br>';
echo gettype(10+15.5);//==>double / float
echo'<br>';

/*
8-type casting
==============
ازاى نحول البيانات بنفسنا 
boolean or bool
integer or int
float or double or real
اى نوع داتا اخر لا يتغير زى ما هو 
*/
echo'<br>';
echo 5+(int)'5 lessons';
echo'<br>';
echo gettype((int)(3.5)+1);
echo'<br>';
echo (int)(10.5+10.5);
echo'<br>';
echo gettype((int)(10.5+10.5)) ;
echo'<br>';
echo (int)10.5+(int)10.5;
echo'<br>';

/*
9-boolean + converting to boolean
=================================
var_dump ==> معلومات مفصله عن البيانات اللى بتديها لها
*/

var_dump((bool)'');
echo'<br>';
var_dump((bool)0);
echo'<br>';
var_dump((bool)'0');
echo'<br>';
var_dump((bool) array(1));
echo'<br>';
/*
10- string And Escaping
=======================
nl2br()==> كتابة على كذا سطر
=======
*/
echo 'hello"php"';
echo'<br>';
echo "hello 'php'";
echo'<br>';
echo 'hello\'php\'';//scape
echo'<br>';
echo 'fsdxz\\';
echo'<br>';
echo nl2br('
hello
welcome'
);
echo'<br>';
echo'<br>';

/*
11-String And Escaping
======================
heredoc
Nowdoc
*/
//heredoc escape لكله ماعدا المتغيرات و \\
echo <<<"here"
hello php
$$$%%%'''"""\\\\
here;

echo'<br>';
echo'<br>';

//Nowdoc escape لكله
echo <<<'Now'
hello php
$$$%%%'''"""\\\\
Now;

$name='fatma';

echo '<ul>';
    echo "<li>".$name."</li>";
    echo "<li>".$name."</li>";
    echo "<li>".$name."</li>";
    echo "<li>".$name."</li>";
echo '</ul>';

echo'<br>';
echo'<br>';
echo'<br>';
echo'<br>';

echo <<<"navlinks"
<ul>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
</ul>
navlinks;

/*
12-Array
=====
-array with key
-array without keys
-array with one key
-array value override
=======================
-print_r()
==========
*/
echo '<pre>';
print_r([
    "A" => "Ahmed",
    "B" => "Basea",
    true => "fatma",
    "1" => "ali",
    9 => "gggg",
    "nada",
    "name" => [
        "aya", "mohamed", "mona" => [
            "1", "2", "3"
        ]
    ]
]);
echo '</pre>';

/*
    13-Variables important:
    =======================
    1- start with Doliar sign==> $
    2- start with a letter [a-z/A-Z] or underscore_
    3-number in name 
    4-no special characters allowed
    5-case sensitive
    ================
    test single and double quotes ==> single لا تتعامل مع المتغيرات
*/
$username = "fatma";
$Username = "ali";

echo $username;
echo '<br>';
echo $Username;
echo '<br>';
echo 'hello $username';
echo '<br>';
echo '<br>';
echo "hello $username";
echo '<br>';
echo '<br>';
/*
    14- varb.php
    ============
    */
echo '<br>';
/*
    15- variable variable==>بتاخد قيمة متغير معين وتخليها 
    اسم لمتغير جديد
    */
echo '<br>';
$a="asmaa";
$$a ="monka";

echo "HELLO ${$a}";

/*
16-Assign variable:
===================
*/
echo '<br>';
echo '<br>';

$a="ali";
$b=$a;
$b="ahmed";
$c=&$a;//اى تغير بيحصل بياثر على التانى
$c="aya";
echo $a;
echo '<br>';
echo '<br>';
echo $b;
echo '<br>';
echo '<br>';
echo $c;

/*
17-Pre-Defined variable:
========================
*/

/*
18-Constants: مش بيتغير
==============
*/
echo '<br>';
echo '<br>'; 

define("DB_NAME","fatma");
define("MAIN_NUM",5);
echo DB_NAME;
echo MAIN_NUM*5;

/*
19-pre_constant
===============
Reserved keywords
=================
break-clone
*/

/* 
20-operator
============
[%] modulus==>باقى القسمه
[**] Exponentiation==>اسس
+$a/+""==>بترجع القيمه الحقيقه ونوعهاالحقيقي==>
"100"==> int

-$a/-""====>بتعكس اشاره وترجع القيمه الحقيقه
*/
echo '<br>';
echo '<br>'; 

echo 2**4;

echo '<br>';
echo '<br>'; 
echo "100";//
echo '<br>';
echo '<br>'; 
echo gettype("100");//
echo '<br>';
echo '<br>'; 
echo +"100";//
echo '<br>';
echo '<br>'; 
echo gettype(+"100");//
echo '<br>';
echo '<br>'; 
echo -"-100";//
echo '<br>';
echo '<br>'; 
echo gettype(-"-100");//

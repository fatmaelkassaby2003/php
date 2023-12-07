<?php
      /*week 1:
              1:5(Tags and instruction)
      */
echo "We Love PHP";
echo "<br>";
print 'apple';
#====>single line comment
/*
multi line comment THE BEST
*/
?>
<?= 'help me'; //short tag 
echo'<br>'; ?>
<?php 
      /* Week 2:
      6:12 ======>6- Data type(bool==>boolean
                              int==>integer
                              float==>floating point num/double
                              string-array-other type
                              Gettype()هترجع نوع البيانات )
          =======>7- Type Juggling + Automatic Type conversion
          =======>8- Casting تحويل البيانات بنفسنا 
          =======>9- Boolean + converting to boolean
          =======>10- String + Escaping / nl2br()
          =======>11-Heredoc/Nowdoc
          =======>12-array 
                          ==>with key
                          ==>without key
                          ==>with one key
                          ==>value override
                    print_r()*/
echo gettype(true) ;
echo '<br>';
echo gettype(1) ;
echo '<br>';
echo gettype(2.5) ;
echo '<br>';
echo gettype(-2) ;
echo '<br>';
echo gettype(array("EG"=>"Egypt","KSA"=>"Saudi Aribia")) ;
echo "<br>";
echo'<br>';
echo gettype(1+'2') ;
echo '<br>';
echo gettype(true+true) ;
echo '<br>';
echo gettype(10+20.5) ;
echo '<br>';
echo (int)10.5+(int)10.5;
echo '<br>';
echo (int)(10.5+10.5);
echo '<br>';
echo gettype((int)10.5+(int)10.5);
echo '<br>';
echo 10.5+10.5;
echo '<br>';
echo gettype(10.5+10.5);
echo '<br>';
var_dump((bool) "");
echo "<br>";
var_dump((bool) array());
echo "<br>";
var_dump((bool) array(1));
echo "<br>";
echo '<br>';
echo '<br>';
echo '=============================================';
echo '<br>';
echo'10';
echo '<br>';
echo '====';
echo '<br>';
echo "Hello 'php'";
echo "<br>";
echo 'hello "php"';
echo '<br>';
echo 'hello \'php\'';
echo '<br>';
echo 'hello php \\\\';
echo '<br>';
echo nl2br('
  hello
  every
  one'
);
echo '<br>';
echo '=======================================';
echo '<br>';
echo '11';
echo '<br>';
echo '======';
echo '<br>';
$name="fatma";

echo <<<"here"
      hello php
      $$ '''"""\\\\\\
      hello $name
here;
echo "<br>";
echo <<<'Now'
      hello php
      $$ '''"""\\\\\\
      hello $name
Now;

echo '<br>';
echo '=======================================';
echo '<br>';
echo '12';
echo '<br>';
echo '======';
echo '<br>';
echo '<pre>';
print_r
(
  [
    'A'=> 'Aya',
    'B'=> 'ball',
    true=> 'sayed',
  ]
);
echo '</pre>';


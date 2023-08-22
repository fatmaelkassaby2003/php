<?php
/*1-5*/
    echo phpversion();
 //echo 'Prevent Me From Running Please';
    #echo 'Prevent Me From Running Please';
    /*echo 'Prevent Me From Running Please';*/

    echo'<br>';
    echo'<br>';
    echo'<br>';

    echo (int)15.2 + (int)14.7 + (int)(10.5 + 10.5); // 50
    echo'<br>';
    echo'<br>';
    
    echo gettype((int)15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer
    echo'<br>';
    echo'<br>';


    echo '// Hello "Elzero"\\ \\ """ We Love "$$PHP"';

    // Needed Output
    // Hello "Elzero" \\ """ We Love "$$PHP"


    echo nl2br("We 
     Love 
      Elzero
       Web
       School");

// Needed Output
// We
// Love
// Elzero
// Web
// School
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "My First PHP Page";?></title>
</head>

<body>
    <div><?php echo  "WE love";?></div>
    <div><?php echo "ELZERO CHANNAL";?></div>
</body>

</html>
<?php 
$old_name =  'Igbasan';
$new_name = 'Emmanuel';

//the and sign (&) is used to pass the value of the variable by reference 
//instead of by value
$name = &$old_name;

//the value of $name is now Emmanuel
$old_name = $new_name;

// echo 'Hello ' .$name;

define('first_name', 'First Name');

echo first_name;

'<br />';

// BOOLEANS
$isComplete = false;


var_dump($isComplete);

if($isComplete){
    echo 'Task is complete';
} else {
    echo 'Task is not complete';
}

// INTEGERS
   $y = (int) 2.5;
   $x = (int) 2_000_000;

   var_dump($y);
   var_dump(is_int($y));
   var_dump($x);

    // FLOATS
    $z = 2.5;
    var_dump($z);
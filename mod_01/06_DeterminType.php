<?php 

$intVar = 1234;
$strinVar = 'yep.. im a string';
$boolVar = false;
$floatVar = 12.22;

# we can check to see what the values are 
# inside each of these variables. 

is_int($intVar); // this will do one of two things
// if the data inside is truely 
// an int. it will return a 1 or true. 

# if we echo the above is_ent() and the value is 
# is true it will retun a 1. If the result is false 
# it will retun nothing. no zero... no false nothing.. 
# this makes for a very easy if statment because 1 = true. 

is_string();
is_bool();
is_float();

/// these are the other ways to dectect the other types of
// php suffs.. 

// the last thing we need to talk aobut is weather something
// is a constant... or rather if the constant is "Defined" 
// this will return true or a 1 if the constant has a value. 
// and nothing means it has not been defined. 

echo defined('CHECK_CONSTANT');
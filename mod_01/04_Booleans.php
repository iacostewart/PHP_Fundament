<?php 

$bool = true;
// and false also works 
/*
any value can be converted to a bool
*/
$hasValue = 1244;
var_dump((bool)$hasValue); //<- you just need to add (bool) inside 
// the var_dump section next to the variable in question. 

$emptyString = "";
var_dump((bool)$emptyString); //<-- this is helpful too. its an empty sting.
// so this will return with a false.
// could also be usefull in evaulating arrays.. if they are empty they will be false. 
// if the string was populated it would return false. 

var_dump($bool);
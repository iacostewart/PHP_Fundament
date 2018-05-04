<?php

$curency = 'penny';

$sampleString = "A $curency saved is a $curency earned.";
echo $sampleString;
// this will pring out "A penny saved is a penny earned."
// because when we use double quotes it evaluates everying inside 
// string. and uses the variable. this only happens with double quotes. 

/* what if we wanted to print out something like 2nd.. 
*/
$var = 2;

echo "$varnd place"; 
/*
this will only print out place.. because the php robot of wisdom 
is looking for a variable named $varnd.. and that dosent exist so it skips it. 

to tell the all wise PHP monster what we are intending to do we need to add 
curley braces. 
*/

echo "($var)nd place"; 
// this will display 2nd place 
/*
we can also us the . to concat the two valuse. 

*/
echo "$var . nd place ";

/* single quote vs double quote unfairness 

$misc = "St. Patrick's dat";
echo $misc;
this will print out the ' in patricks because there is a single 
quote inside of a double quote.. this wont work the other way around. 



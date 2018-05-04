<?php

// we can pass in a value that we want 
// our function to use. 

function hippo($color){
    echo $color;
}

// here is an example 

function hippo($color){
    echo $color;
}
hippo('blue'); // blue 

// we can also pass variables into the parameters
// of our function. 

$color = 'red'
// if we ran this 
hippo($color);
// it would return red


// we can add more than just one parameter into
// our function. we just add a , 

$authorName = "dr suess";
$year = 1985;
function bookByAuthorYear($authorName, $year){
    echo $year;
    echo"\n"
    echo $authorName;
}
// this will return 
1985
dr suess 


// you wont always know what parameters are going 
// to be passed in.. so we set up "default parameters" 
// these can be used to help test the function or just hard code stuffs. 
function bookByAuthorYear($authorName, $year = 1999){

// if we run this function like we did before.. it will 
// and we have a value to place in the year 
// it will default to that value. 
// but if we run the fuction with out that info 
// it will still run the function 
// and include the "Default" data. 

// **** remember all default parameters need to email_exist
// at the end of the parameters in the () section. 
 





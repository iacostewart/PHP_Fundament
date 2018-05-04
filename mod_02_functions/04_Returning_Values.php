<?php

/* we dont always want to print out what 
inside of the funciton. 
we will want to return a value. 

so we need to tell the function to do that. 
*/

function getAuthor(){
    return "charles dickens";
}
// we can add that return to a variable 

$authorName = getAuthor();
// now $authorName has a value of "charles dickens"


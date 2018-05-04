<?php 

$authorName = "william Shakespear";

function setAutorName(){
    $authorName = "charles Dickens";
}


// if we what the value to change weather its inside the fuciont 
// outside of the funcion. 

// we need to add a new line of code 

function setAutorName(){
    global $authorName;
    $authorName = "Charles Dickens";
}

// global is a reserved keyword.. it needs to be use inside of a funtion. 


<?php 

// php has a cool feature where you can 
// call a function by using a variable name 

function getAuthor(){
    echo "charles Dickens";
}
$variableFuctionName = "getAuthor"; // <-- note that we are calling this function by just writeing its 
// name in a string .. no need for (). 

$variableFunctionName();
// this will return the value of "charles dickens" 

// preaty sweet.. 
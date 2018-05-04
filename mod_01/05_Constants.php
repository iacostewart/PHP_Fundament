<?php 

// we can create a constant by using the 
//define followed by the 'NEW_CONSTANT', <-- NAMEING 
// conventions dictate that all constants need to be
// named in all caps.. 
// followed by a , then what ever the value of your constant
// needs to be. 

// the cool thing about constants is they are 
// global.. so they can be accessed anywhere. 

define('NEW_CONSTANT', "hello new constant!");

echo NEW_CONSTANT;
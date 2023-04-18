<?php 
   $sample_string= 'My name is Sayantan';
   echo strlen($sample_string).'<br>'; //Length of string
   echo strpos($sample_string, 's').'<br>';//Position of first occurence of character(second parameter)
   echo strrpos($sample_string, 'a').'<br>';
   //Position of last occurence of character(second parameter)
    echo strrev($sample_string).'<br>'; //Reverse of string
    echo strtolower($sample_string).'<br>'; //Lower case
    echo strtoupper($sample_string).'<br>'; //upper case
    echo ucwords($sample_string).'<br>'; //Capitilize first letter of 
    echo str_replace('My name is', 'I am', $sample_string).'<br>'; //Replace a part of string of first parameter with second
    echo substr($sample_string, 0, 10).'<br>';
    echo substr($sample_string,10).'<br>';
    printf('1+1 = %f',0.01+0.02);
?>
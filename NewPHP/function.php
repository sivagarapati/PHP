<?php
#functions
/*
differen frameworks uses different case
Camel case - myFunction()    used for variables & functins , used in symphony
Lower case - my_function()     use for variables & functi0ns, used in codeiginator
Pascal case - MyFunction()    used for class
*/
function myFunction(){
    echo 'Hello world';
}
//myFunction();

function sayHello($name="world"){
    echo 'hello '.$name .'<br>';
}
//sayHello('jack');
//sayHello();

function addNumber($num1,$num2){
    return $num1+$num2;   //retuen value
}
//echo addNumber(2,3); 

//by reference
$myNum=10;
function addFive($num){
    $num+=5;
}
function addTen(&$num){
    $num+=10;
}
addFive($myNum);
echo 'value :'. $myNum .'<br>';
addTen($myNum);
echo 'value :'. $myNum .'<br>';

#CONDITIONALs
/*
==
===
<
>
<=
>=
!=
!==
*/

#LOGICAL operators
/*
and  &&
or   ||
xor  
*/

#SWITCH


?>
<html>
<head>
<title>PHP functions</title>
</head>
<body>
<h1>PHP funcions</h1>
</body>
</html>
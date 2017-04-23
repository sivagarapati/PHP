<?php
$message="Helloworld";   //single line comment
$title="first php";     #single line comment
/* multi-line
	Comments*/
	$num1=2;
	$num2=3;
	$sum=$num1+$num2;
	echo $sum;
	$float=1.23;
	$bool=true;
	$string1 ="Hello";
	$string2="world";
	$greet=$string1.''.$string2;   //concat of two strings.
	echo $greet;
	$greet2="$string1 $string2";  //concat of two string with double quotes,it not work with single quotes
	
	echo $greet2;
	$string3= 'They\'re Here';
	echo $string3;
	
	define('NAME',"new author",true);  //constants alwasys UPPERCASE letters
	echo NAME;
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP <?=$title?></title>
	<meta charset="utf-8" />
</head>
<body>
<h1><?php echo $message ?></h1>
</body>
</html>

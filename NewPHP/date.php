<?php
echo date('d');  //day number of day
echo date('M'); //month
echo date('Y'); //year
echo date ('l');  //Day of the week
echo '<br>';
echo  date('y/m/d  <br>');
echo date('m-d-y');
echo '<br>';

echo date('h');   //hour
echo date('i');    //min
echo date('s');   //seconds
echo date('a');   //AM or PM
echo '<br>';
echo date('h:i:sa');
echo '<br>';
//set time zone
date_default_timezone_set('America/Chicago');
echo date('h:i a');
echo '<br>';
$timestamp=mktime(10,10,55,01,01,2000);
//echo $timestamp;
echo date('m/d/y h:i:sa',$timestamp);
echo '<br>';
$timestamp2=strtotime('10:00pm march 22 2017');
//echo $timestamp2;
echo date('m/d/y h:i:sa',$timestamp2);
echo '<br>';
$timestamp3=strtotime('tomorrow');
$timestamp4=strtotime('+12 Days');
echo date('m/d/y h:i:sa',$timestamp3);
echo '<br>';
echo date('m/d/y h:i:sa',$timestamp4);
echo '<br>';
?>
<html>
<head>
<title>php dates</title>
</head>
<body>
<h1>PHP dates & Timestamps</h1>
</body>
</html>
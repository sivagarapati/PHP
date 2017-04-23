<?php
#Arrat - 3type
    /*-indexed
    -Associative
    -multi-dimensional*/
    
//INDEXED type array
$people=array('peter','kate','john');   
$ids=array(10,20,30);
$cars=['honda','toyota','ford'];
$cars[]='chevy';

//echo $people[1];  //work using index value of array.
//echo $ids[0];
//echo $cars[3];
//echo count($cars); 
//print_r($cars);
//var_dump($cars);   //shows all the variable inside the array like datatype 


//ASSOCIATIVE Array
$people=array('brad'=> 35,'jhon'=>20,'peter'=>25);
$ids=[22=>'peter',40=>'jhon',30=>'brad'];
//echo $people['jhon'];
//echo $ids[22];
$people['jack']=42;
//echo $people['jack'];
//print_r($people);
//var_dump($people);

//MULTI-DEMIENSIONAL array
$cars=array(
    array('honda',20,10),
    array('toyota',30,20),
    array('ford',15,5)
    );
    //echo $cars[1][0];
    //echo $cars[0][1];


//LOOPS
/*\
For
While
Do..while
Foreach
*/
for($i=0;$i<5;$i++){
    echo 'for' .$i;
    echo '<br>';
}
$w=0;
while($w<5){
    echo 'while'.$w;
    echo '<br>';
    $w++;
}

$d=0;
do{
    echo 'dowhile'.$d;
    echo '<br>';
    $d++;
}
while($d<5);


//FOREACH loops works with arrays

//$people=array('brad','peter','jhon','jack');

/* foreach($people as $person){
    echo $person;
    echo '<br>';
} */

//for each with associactive array
$people=array('brad'=>'brad@com','peter'=>'peter#com','jhon'=>'jhon@com','jack'=>'jack@com');
foreach($people as $person => $value){
    echo "$person is $value";
    echo '<br>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP arrays & loops</title>
	<meta charset="utf-8" />
</head>
<body>
<h1>Array & loops</h1>
</body>
</html>

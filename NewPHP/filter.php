<?php

/*
//check for posted data
if(filter_has_var(INPUT_POST,'data')){
echo 'Data found';
}else{
echo 'no data';
}*/

//validate input data
/*
if(filter_has_var(INPUT_POST,'data')){
$email=$_POST['data'];
//remove illegal chars
$email=filter_var($email,FILTER_SANITIZE_EMAIL);
echo $email.'<br>';

if(filter_input($email,FILTER_VALIDATE_EMAIL)){
echo 'eEmail is valid';
}else{
echo 'Email is not valid';
}
}
#FILTER_VALIDATE_BOOLEAN
#FILTER_VALIDATE_EMAIL
#FILTER_VALIDATE_FLOAT
#FILTER_VALIDATE_INT
#FILTER_VALIDATE_IP
#FILTER_VALIDATE_REGEXP
#FILTER_VALIDATE_URL

#FILTER_SANITIZE_EMAIL
#FILTER_SANITIZE_ENCODED
#FILTER_SANITIZE_NUMBER_FLOAT
#FILTER_SANITIZE_NUMBER_INT
#FILTER_SANITIZE_SPECIAL_CHARS
#FILTER_SANITIZE_STRING
#FILTER_SANITIZE_URL
$var=23;
if(filter_var($var,FILTER_VALIDATE_INT)){
echo $var. 'is a number';
}else{
echo $var.'is not a number';
}
}

$var='33sf2sf15asf1as2';
var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT));

$var='<script>alert(1)</script>';
//echo $var;
var_dump(filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS));


$filters =array(
"data"=> FILTER_VALIDATE_EMAIL,
"data2"=>array(
"filter"=>FILTER_VALIDATE_INT,
"options"=>array(
"min_range"=>1,
"max_range"=>100
)
)
);
print_r(filter_input_array(INPUT_POST,$filters));
*/

$arr=array(
"name"=> "peter jhon",
"age"=>"24",
"email"=>"peter@c.c"
);

$filters=array(
    "name"=>array(
    "filter"=>FILTER_CALLBACK,
    "options"=>"ucwords"
    ),
"age"=>array(
"filter"=>FILTER_VALIDATE_INT,
"options"=>array(
"min_range"=>1,
"max_range"=>120
)
),
"email"=>FILTER_VALIDATE_EMAIL
);
print_r(filter_var_array($arr,$filters));
?>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
  </form>
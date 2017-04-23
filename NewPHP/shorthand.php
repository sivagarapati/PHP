<?php
$loggedIn=false;

$arr=[1,2,3,4];
/*
if($loggedIn){
echo 'you are logged in';
}else{
echo 'you are not looged in'
}*/
//echo ($loggedIn) ? 'you are logged in' : 'you are not looged in' ;  //shorthand, ? is ternary oprator.

$isRegistered=($loggedIn==true)?true:false;
echo $isRegistered;

$age=5;
$score=15;

//echo 'Your Score is:'.($score > 10 ? ($age>10 ? 'Average':'Exceptional'):($age > 10 ? 'Horrible':'Average'));   //shorthand nested statement;

?>
  <div>
    <?php if($loggedIn) { ?>
      <h1>Welcome User</h1>
      <?php  }else { ?>
        <h1>Welcome guest </h1>
        <?php } ?>
  </div>
  <div>
  <?php if($loggedIn): ?>
  <h1>Welcome user</h1>
  <?php else: ?>
<h1>welcome guest</h1>
  <?php endif; ?>
  </div>

  <div>
  <?php foreach($arr as $val): ?>
  <?php echo $val; ?>
  <?php endforeach; ?>
  </div>
  <div>
  <?php for($i=0;$i<10;$i++): ?>
  <li><?php echo $i; ?></li>
  <?php endfor; ?>
  </div>
<?php
#GET method - sending data through URL,in sercure
#POST method - sending sata through http,secure.

if(isset($_GET['name'])){
    //print_r($_GET);
    //echo $_GET['email'];
    $name= htmlentities($_GET['name']);
    //echo $name;
}
/*
if(isset($_POST['name'])){
//print_r($_POST);
//echo $_POST['email'];
//$name= htmlentities($_POST['name']);
//echo $name;
}

if(isset($_REQUEST['name'])){   //$_REQUEST is work on both get & post methods
//print_r($_REQUEST);
//echo $_GET['email'];
$name= htmlentities($_REQUEST['name']);
echo $name;
}
*/
//echo $_SERVER['QUERY_STRING'];

?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>php website</title>
  </head>

  <body>
    <form method='POST' action="get_post.php">
      <div>
        <label>Name</label>
        <br>
        <input type='text' name="name" />
      </div>
      <div <label>Email</label>
        <br>
        <input type="text" name="email" />
      </div>
      <input type="submit" value="submit" />
    </form>
    <ul>
      <li>
        <a href="get_post.php?name=jhon">jhon</a>
      </li>
      <li>
        <a href="get_post.php?name=peter">peter</a>
      </li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
  </body>

  </html>
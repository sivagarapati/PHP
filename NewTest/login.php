<?php
include 'connect.php';
//$username=$_POST['username'];
//$password=$_POST['password'];
$username="username";
$password="password";

if(isset($_POST['username']) && isset($_POST['password']))  {
    if($_POST['username']==$username && $_POST['password']==$password)
    {
        $_SESSION['loggedin']=true;
        header("Location:success.php");
    }
    else "wrong password or username";
    }
?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>login page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>

  <body>
    <h1>login page</h1>
    <div class="form-group colspan=4" style="align:center">
    <form name='login' method="post" action="success.php">
      Username:
      <input type='text' name='username' placeholder="Enter username" required>
      <br/><br/> PassWord:
      <input type='password' name='password' placeholder="enter password" required>
      <br/>
      <input class="btn btn-default" type='submit' value='Login'>
    </form>
</div>
  </body>

  </html>
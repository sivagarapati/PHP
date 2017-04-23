<?php
include 'connect.php';


if (isset($_POST['submit']))
{
    $firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$dob = $_POST['dob'];
		$username = $_POST['username'];
		$password  = $_POST['Password'];

    $sql="insert into student(firstname,lastname,DOB,username,password,) values($firstname','$lastname','$dob','$username','$password',)";
    mysql_query($sql);
    echo "detailed entered";
}else{
    echo "error oocured";
}


?>

  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8" />
    <title>create account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>

  <body>
    <br />
    <h1>create account</h1>
    <form id="newAcc" method="post" action="newAccount.php">
      <table>
        <tr>
          <td> First Name:</td>
          <td>
            <input type='text' name='firstname' placeholder="Enter firstname" required> </td>
        </tr>
        <tr>
          <td> Last Name:</td>
          <td>
            <input type='text' name='lastname' placeholder="enter lastname" required> </td>
        </tr>
        <tr>
          <td> Date of Birth:</td>
          <td>
            <input type='date' name='dob' placeholder="enter DOB" required>
          </td>
        </tr>
        <tr>
          <td> username:</td>
          <td>
            <input type='text' name='username' placeholder="enter username" required> </td>
        </tr>
        <tr>
          <td> password:</td>
          <td>
            <input type='password' name='password' placeholder="enter password" required> </td>
        </tr>
        <tr>
          <td>
            <input class="btn btn-default" type="reset" name="reset" value="Cancel" onClick="resetForm(newAcc); return false;" />
          </td>
          <td>
            <input class="btn btn-default" type='submit' name="create" onClick="submitFun()" value='create account' />
          </td>
        </tr>

      </table>
    </form>
    </div>

  </body>

  </html>